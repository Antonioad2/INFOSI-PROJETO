<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Car;
use App\Model\Client;
use App\Model\Driver;
use App\Model\Reserve;

class ReservationController extends Controller
{
    // Etapa 1: Cliente escolhe carro, datas, extras, motorista
    public function step1(Request $request, $car_id)
    {
        $car = Car::findOrFail($car_id);

        // Pega dados do form
        $data = [
            'car_id'       => $car->id,
            'pickup_location' => $request->input('pickup_location'),
            'start_date'  => $request->input('data_retirada'),
            'end_date' => $request->input('data_devolucao'),
            'extras'       => $request->input('extras', []),
            'driver_id'    => $request->input('driver_id'),
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
            return redirect()->route('site.home.index')
                ->with('error', 'Selecione um carro primeiro.');
        }

        $car = Car::with(['brand', 'models'])->findOrFail($data['car_id']);

        // 🔹 Calcula número de dias
        $days = (new \Carbon\Carbon($data['start_date']))
            ->diffInDays(new \Carbon\Carbon($data['end_date'])) ?: 1;

        $price = $days * $car->price;

        // Se tiver motorista
        if (!empty($data['driver_id'])) {
            $driver = Driver::find($data['driver_id']);
            if ($driver) {
                $price += $days * $driver->price;
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

        return view('site.home.car_book.index', compact('car', 'data', 'days', 'price'));
    }

    // Confirmação: cria reserva na BD
    public function confirm(Request $request)
    {
        $data = session('reservation_data');
        if (!$data) {
            return redirect()->route('site.home.index')
                ->with('error', 'Sessão expirada, faça a reserva novamente.');
        }

        // 🔹 Procura cliente pelo email informado
        $client = Client::where('email', $request->input('email'))->first();

        if (!$client) {
            // Se não existir, cria novo cliente
            $client = Client::create([
                'name'    => $request->input('name'),
                'email'   => $request->input('email'),
                'phone'   => $request->input('phone'),
                'address' => $request->input('address'),
            ]);
        }

        $car = Car::findOrFail($data['car_id']);

        $days = (new \Carbon\Carbon($data['start_date']))
            ->diffInDays(new \Carbon\Carbon($data['end_date'])) ?: 1;

        $price = $days * $car->price;

        if ($data['driver_id']) {
            $driver = Driver::find($data['driver_id']);
            if ($driver) {
                $price += $days * $driver->price;
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

        Reserve::create([
            'car_id'          => $car->id,
            'client_id'       => $client->id,
            'driver_id'       => $data['driver_id'],
            'pickup_location' => $data['location'], // <- corrigido aqui
            'start_date'      => $data['start_date'],
            'end_date'        => $data['end_date'],
            'extras'          => json_encode($data['extras']),
            'total_price'     => $price,
            'payment_method'  => $request->input('payment_method', 'simulado'),
            'status'          => 'confirmed',
        ]);


        session()->forget('reservation_data');

        return redirect()->route('site.home.index')
            ->with('success', 'Reserva confirmada com sucesso!');
    }

}
