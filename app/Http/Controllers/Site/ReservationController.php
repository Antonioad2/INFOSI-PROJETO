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
use Illuminate\Support\Facades\DB;
use App\Model\Card;
use App\Model\CompanyAccount;

class ReservationController extends Controller
{
    // ----------------- Etapa 1 -----------------
    public function step1(Request $request, $car_id)
    {
        $car = Car::findOrFail($car_id);

        // Converter datas para formato MySQL
        $startDate = \Carbon\Carbon::createFromFormat('d-m-Y', $request->input('start_date'))->format('Y-m-d');
        $endDate   = \Carbon\Carbon::createFromFormat('d-m-Y', $request->input('end_date'))->format('Y-m-d');

        $data = [
            'car_id'          => $car->id,
            'pickup_location' => $request->input('pickup_location'),
            'start_date'      => $startDate,
            'end_date'        => $endDate,
        ];

        // 🔹 Salvar na sessão
        session([
            'reservation_data' => $data,
            'car_id'           => $car->id,      // <── Importante
        ]);

        return redirect()->route('site.reservation.checkout')
            ->with('reservation_stage', 1);
    }

    // ----------------- Etapa 2 -----------------
    public function step2(Request $request, $car_id)
    {
        $data = session('reservation_data');
        $car = Car::findOrFail($car_id);

        $start = new \Carbon\Carbon($data['start_date']);
        $end   = new \Carbon\Carbon($data['end_date']);
        $days  = $end->diffInDays($start) ?: 1;

        $resources    = $request->resources ?? [];
        $resourcesTotal = collect($resources)->sum(
            fn($r) => config("resources.extras.{$r}.price", 0)
        );

        $driverTotal = 0;
        if ($request->driver_id) {
            $driver = Driver::findOrFail($request->driver_id);
            $driverTotal = $driver->daily_price * $days;
        }

        session([
            'reservation_services' => [
                'extras'    => $request->input('extras', []),
                'driver_id' => $request->input('driver_id'),
            ]
        ]);

        return redirect()->route('site.reservation.checkout')
            ->with('reservation_stage', 2);
    }

    // ----------------- Etapa 3 -----------------
    public function step3(Request $request, $car_id)
    {
        $client = Client::firstOrCreate(
            ['email' => $request->email],
            [
                'name'       => $request->name,
                'birth_date' => $request->birth_date,
                'phone'      => $request->phone,
                'address'    => $request->address,
            ]
        );

        session(['reservation_client' => $client]);

        return redirect()->route('site.reservation.checkout')
            ->with('reservation_stage', 3);
    }

    // ----------------- Confirmação -----------------
    public function confirm(Request $request)
    {
        $data         = session('reservation_data');
        $dataServices = session('reservation_services');
        if (!$data || !$dataServices) {
            return redirect()->route('site.home')
                ->with('error', 'Sessão expirada, faça a reserva novamente.');
        }

        $client = session('reservation_client');
        $car    = Car::findOrFail($data['car_id']);

        $start = new \Carbon\Carbon($data['start_date']);
        $end   = new \Carbon\Carbon($data['end_date']);
        $days  = $end->diffInDays($start) ?: 1;
        $price = $days * $car->price;

        if (!empty($data['driver_id'])) {
            $driver = Driver::find($data['driver_id']);
            $price += $driver ? $days * $driver->daily_price : 0;
        }

        if (!empty($data['extras'])) {
            foreach ($data['extras'] as $extra) {
                $config = config("resources.extras.$extra");
                $price += $config['price'] ?? 0;
            }
        }

        DB::beginTransaction();
        try {
            $card = Card::where('client_id', $client->id)
                ->where('card_number', $request->card_number)
                ->lockForUpdate()
                ->first();

            if (!$card) {
                return back()->withErrors(['card_number' => 'Cartão não encontrado.']);
            }
            if ($card->balance < $price) {
                return back()->withErrors(['card_number' => 'Saldo insuficiente.']);
            }

            $card->balance -= $price;
            $card->save();

            $company = CompanyAccount::first();
            $company->balance += $price;
            $company->save();

            $reserva = Reserve::create([
                'car_id'          => $car->id,
                'client_id'       => $client->id,
                'driver_id'       => $data['driver_id'] ?? null,
                'pickup_location' => $data['pickup_location'],
                'start_date'      => $data['start_date'],
                'end_date'        => $data['end_date'],
                'resources'       => !empty($data['extras']) ? json_encode($data['extras']) : null,
                'total_amount'    => $price,
                'status'          => 'in_progress',
            ]);

            DB::commit();

            try {
                Mail::to($reserva->client->email)->send(new ConfirmacaoReservaMail($reserva));
            } catch (\Exception $e) {
                Log::error('Erro ao enviar email: ' . $e->getMessage());
            }

            session()->forget(['reservation_data', 'reservation_services', 'reservation_client', 'car_id']);

            return redirect()->route('site.car-confirmed')->with('success', 'Reserva confirmada!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => 'Erro no pagamento: ' . $e->getMessage()]);
        }
    }

    // ----------------- NOVO: Checkout -----------------
    public function checkout()
    {
        $stage = session('reservation_stage', 1);
        $carId = session('car_id');
        $car   = $carId ? Car::find($carId) : null;

        if (!$car) {
            return redirect()->route('home')
                ->with('error', 'Carro não encontrado ou sessão expirada.');
        }

        switch ($stage) {
            case 1:
                return view('site.reservation.book-checkout.index', compact('car'));
            case 2:
                return view('site.reservation.details-checkout.index', compact('car'));
            case 3:
                return view('site.reservation.payment.index', compact('car'));
            default:
                return view('site.reservation.finish.index', compact('car'));
        }
    }
}
