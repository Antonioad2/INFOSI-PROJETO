<?php
namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Model\Reserve;
use Illuminate\Http\Request;
use App\Model\Client;
use App\Model\Car;
use App\Model\Driver;
use Carbon\Carbon;

class CarBookController extends Controller
{
    public function store(Request $request)
    {
        // 1. Busca cliente ou cria novo
        $client = Client::firstOrCreate(
            ['email' => $request->email],
            [
                'name'       => $request->name,
                'birth_date' => $request->birth_date,
                'phone'      => $request->phone,
                'address'    => $request->address,
            ]
        );

        // CONVERTER AS DATAS para formato MySQL
        $startDate = Carbon::createFromFormat('d-m-Y', $request->start_date)->format('Y-m-d');
        $endDate = Carbon::createFromFormat('d-m-Y', $request->end_date)->format('Y-m-d');

        // 2. CALCULAR O TOTAL
        $car = Car::findOrFail($request->car_id);
        
        // Calcula número de dias
        $start = Carbon::createFromFormat('d-m-Y', $request->start_date);
        $end = Carbon::createFromFormat('d-m-Y', $request->end_date);
        $days = $end->diffInDays($start) ?: 1;

        $totalAmount = $days * $car->price;

        // Se tiver motorista
        if (!empty($request->driver_id)) {
            $driver = Driver::find($request->driver_id);
            if ($driver) {
                $totalAmount += $days * $driver->daily_price;
            }
        }

        // Se tiver extras
        if (!empty($request->extras)) {
            foreach ($request->extras as $extra) {
                $config = config("resources.extras.$extra");
                if ($config) {
                    $totalAmount += $config['price'];
                }
            }
        }

        // 3. Cria reserva
        $reservation = Reserve::create([
            'car_id'          => $request->car_id,
            'client_id'       => $client->id,
            'driver_id'       => $request->driver_id,
            'pickup_location' => $request->pickup_location,
            'start_date'      => $startDate,
            'end_date'        => $endDate,
            'resources'       => $request->extras ? json_encode($request->extras) : null,
            'status'          => 'in_progress',
            'total_amount'    => $totalAmount, // ← Total calculado
        ]);

        return redirect()->route('site.home')->with('success', 'Reserva efetuada com sucesso!');
    }
}