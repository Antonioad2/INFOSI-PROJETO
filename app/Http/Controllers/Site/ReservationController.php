<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Car;
use App\Model\Client;
use App\Model\Driver;
use App\Model\Reserve;
use App\Mail\ConfirmacaoReservaMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ReservationController extends Controller
{
    // Etapa 1: Cliente escolhe carro, datas, extras, motorista
    public function step1(Request $request, $car_id)
    {
        $car = Car::findOrFail($car_id);

        // Converter datas para formato MySQL (YYYY-MM-DD)
        $startDate = \Carbon\Carbon::createFromFormat('d-m-Y', $request->input('start_date'))->format('Y-m-d');
        $endDate = \Carbon\Carbon::createFromFormat('d-m-Y', $request->input('end_date'))->format('Y-m-d');

        // calcular total
        $car = Car::findOrFail($request->car_id);
        $days = \Carbon\Carbon::parse($request->start_date)
                ->diffInDays(\Carbon\Carbon::parse($request->end_date));
        $days = $days > 0 ? $days : 1;

        $carTotal = $car->price * $days;

        $resources = $request->resources ?? [];
        $resourcesTotal = collect($resources)->sum(
            fn($r) => config("resources.extras.{$r}.price", 0)
        );

        $driverTotal = 0;
        if ($request->driver_id) {
            $driver = Driver::findOrFail($request->driver_id);
            $driverTotal = $driver->daily_price * $days;
        }

        $totalAmount = $carTotal + $resourcesTotal + $driverTotal;

        $data = [
            'car_id'          => $car->id,
            'pickup_location' => $request->input('pickup_location'),
            'start_date'      => $startDate, // ← Formato correto
            'end_date'        => $endDate,   // ← Formato correto
            'extras'          => $request->input('extras', []),
            'driver_id'       => $request->input('driver_id'),
        ];

        // Armazena sessão temporária
        session(['reservation_data' => $data]);

        return redirect()->route('site.reservation.checkout');
    }

    // Etapa 2: Checkout (dados do cliente + pagamento simulado)
    public function step2()
    {
        $data = session('reservation_data');

        if (!$data) {
            return redirect()->route('site.home')
                ->with('error', 'Selecione um carro primeiro.');
        }

        $car = Car::with(['brand', 'models'])->findOrFail($data['car_id']);

        // 🔹 Calcula número de dias
        $start = new \Carbon\Carbon($data['start_date']);
        $end = new \Carbon\Carbon($data['end_date']);
        $days = $end->diffInDays($start) ?: 1;

        $price = $days * $car->price;

        // Se tiver motorista
        if (!empty($data['driver_id'])) {
            $driver = Driver::find($data['driver_id']);
            if ($driver) {
                $price += $days * $driver->daily_price; // ← Corrigido para daily_price
            }
        }

        // Se tiver extras
        if (!empty($data['extras'])) {
            foreach ($data['extras'] as $extra) {
                $config = config("resources.extras.$extra");
                if ($config) {
                    $price += $config['price'];
                }
            }
        }

        // 🔹 PASSAR OS DADOS PARA A VIEW
        return view('site.home.car_book.index', [
            'car' => $car,
            'reservationData' => $data, // ← Nome correto da variável
            'days' => $days,
            'price' => $price
        ]);
    }

    // Confirmação: cria reserva na BD
    public function confirm(Request $request)
    {
        $data = session('reservation_data');
        if (!$data) {
            return redirect()->route('site.home')
                ->with('error', 'Sessão expirada, faça a reserva novamente.');
        }

        // 🔹 Procura cliente pelo email informado
        $client = Client::where('email', $request->input('email'))->first();

        if (!$client) {
            $client = Client::create([
                'name'       => $request->input('name'),
                'email'      => $request->input('email'),
                'phone'      => $request->input('phone'),
                'address'    => $request->input('address'),
                'birth_date' => $request->input('birth_date'), // ← Adicionado
            ]);
        }

        $car = Car::findOrFail($data['car_id']);

        $start = new \Carbon\Carbon($data['start_date']);
        $end = new \Carbon\Carbon($data['end_date']);
        $days = $end->diffInDays($start) ?: 1;

        $price = $days * $car->price;

        if (!empty($data['driver_id'])) {
            $driver = Driver::find($data['driver_id']);
            if ($driver) {
                $price += $days * $driver->daily_price; // ← Corrigido
            }
        }

        if (!empty($data['extras'])) {
            foreach ($data['extras'] as $extra) {
                $config = config("resources.extras.$extra");
                if ($config) {
                    $price += $config['price'];
                }
            }
        }

        // CORRIGIR OS NOMES DOS CAMPOS para match com a migration
        $reserva = Reserve::create([
            'car_id'          => $car->id,
            'client_id'       => $client->id,
            'driver_id'       => $data['driver_id'] ?? null,
            'pickup_location' => $data['pickup_location'],
            'start_date'      => $data['start_date'], // Já está no formato correto
            'end_date'        => $data['end_date'],   // Já está no formato correto
            'resources'       => !empty($data['extras']) ? json_encode($data['extras']) : null,
            'total_amount'    => $price,
            'status'          => 'in_progress',
        ]);

        // Enviar email sem travar o fluxo
        try {
            Mail::to($reserva->client->email)->send(new ConfirmacaoReservaMail($reserva));
        } catch (\Exception $e) {
            Log::error('Erro ao enviar email de confirmação: '.$e->getMessage());
            // Opcional: flash message só para admins
            // session()->flash('warning', 'Reserva criada, mas o email não foi enviado.');
        }

        session()->forget('reservation_data');

        return redirect()->route('site.home')
            ->with('success', 'Reserva confirmada com sucesso!');
    }

}
