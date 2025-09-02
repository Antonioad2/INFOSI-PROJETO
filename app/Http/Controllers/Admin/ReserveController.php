<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Reserve;
use App\Model\Client;
use App\Model\Car;
use App\Model\Driver;
use Illuminate\Http\Request;

class ReserveController extends Controller
{
    /**
     * Listar todas as reservas
     */
    public function index()
    {
        $reserves = Reserve::with(['client', 'car', 'driver'])->latest()->get();
        return view('admin.reserves.reserve.index', compact('reserves'));
    }

    /**
     * Mostrar formulário para criar reserva
     */
    public function create()
    {
        $clients = Client::all();
        $cars = Car::all();
        $drivers = Driver::all();

        // passamos 'resources' (config) opcionalmente para view (não obrigatório)
        return view('admin.reserves.reserveCreate.index', compact('clients', 'cars', 'drivers'));
    }

    public function store(Request $request)
    {
        // pegar chaves válidas dos extras do config
        $allowedResources = implode(',', array_keys(config('resources.extras')));

        $request->validate([
            'client_id'  => 'required|exists:clients,id',
            'car_id'     => 'required|exists:cars,id',
            'pickup_location' => 'required|string|max:255', // validação para o novo campo
            'start_date' => 'required|date',
            'end_date'   => 'required|date|after_or_equal:start_date',
            'resources'  => 'nullable|array',
            'resources.*'=> "in:{$allowedResources}",
            'driver_id'  => 'nullable|exists:drivers,id',
            'status'     => 'nullable|in:in_progress,completed,cancelled'
        ]);

        // Carro e dias (garantir pelo menos 1 dia)
        $car = Car::findOrFail($request->car_id);
        $days = \Carbon\Carbon::parse($request->start_date)
                ->diffInDays(\Carbon\Carbon::parse($request->end_date));
        $days = $days > 0 ? $days : 1;

        $carTotal = $car->price * $days;
        // Final do cálculo do carro

        // Recursos (extras)
        $resources = $request->resources ?? [];

        $resourcesTotal = collect($resources)->sum(
            fn($r) => config("resources.extras.{$r}.price", 0)
        );
        // Final do cálculo dos recursos
        
        // Motorista
        $driverTotal = 0;
        if ($request->driver_id) {
            $driver = Driver::findOrFail($request->driver_id);
            $driverTotal = $driver->daily_price * $days;
        }
        // Final do cálculo do motorista

        // Total geral
        $totalAmount = $carTotal + $resourcesTotal + $driverTotal;
        // Final do cálculo total

        // Criar reserva — guardamos resources como JSON (array de keys)
        Reserve::create([
            'client_id'    => $request->client_id,
            'car_id'       => $request->car_id,
            'pickup_location' => $request->pickup_location,
            'start_date'   => $request->start_date,
            'end_date'     => $request->end_date,
            'resources'    => $resources, // <-- aqui sem json_encode
            'driver_id'    => $request->driver_id,
            'status'       => $request->status ?? 'in_progress',
            'total_amount' => $totalAmount,
        ]);


        return redirect()->route('reserves.index')->with('success', 'Reserva criada com sucesso!');
    }

    /**
     * Mostrar detalhes de uma reserva
     */
    public function show($id)
    {
        $reserve = Reserve::with(['client', 'car', 'driver'])->findOrFail($id);
        return view('admin.reserves.reserveView.index', compact('reserve'));
    }

    /**
     * Mostrar formulário para editar reserva
     */
    public function edit($id)
    {
        $reserve = Reserve::findOrFail($id);
        $clients = Client::all();
        $cars = Car::all();
        $drivers = Driver::all();
        return view('admin.reserves.reserveEdit.index', compact('reserve', 'clients', 'cars', 'drivers'));
    }

    /**
     * Atualizar reserva
     */
    public function update(Request $request, $id)
    {
        $allowedResources = implode(',', array_keys(config('resources.extras')));

        $request->validate([
            'client_id'  => 'required|exists:clients,id',
            'car_id'     => 'required|exists:cars,id',
            'pickup_location' => 'required|string|max:255', // validação para o novo campo
            'start_date' => 'required|date',
            'end_date'   => 'required|date|after_or_equal:start_date',
            'resources'  => 'nullable|array',
            'resources.*'=> "in:{$allowedResources}",
            'driver_id'  => 'nullable|exists:drivers,id',
            'status'     => 'required|in:in_progress,completed,cancelled',
        ]);

        $reserve = Reserve::findOrFail($id);

        // Carro e dias
        $car = Car::findOrFail($request->car_id);
        $days = \Carbon\Carbon::parse($request->start_date)
                ->diffInDays(\Carbon\Carbon::parse($request->end_date));
        $days = $days > 0 ? $days : 1;

        $carTotal = $car->price * $days;

        // Recursos
        $resources = $request->resources ?? [];
        $resourcesTotal = collect($resources)->sum(
            fn($r) => config("resources.extras.{$r}.price", 0) // <-- corrigido
        );

        // Motorista
        $driverTotal = 0;
        if ($request->driver_id) {
            $driver = Driver::find($request->driver_id);
            $driverDaily = $driver && $driver->daily_price ? $driver->daily_price : config('resources.driver_price_per_day', 0);
            $driverTotal = $driverDaily * $days;
        }

        $totalAmount = $carTotal + $resourcesTotal + $driverTotal;

        // Atualizar
        $reserve->update([
            'client_id'    => $request->client_id,
            'car_id'       => $request->car_id,
            'pickup_location' => $request->pickup_location,
            'start_date'   => $request->start_date,
            'end_date'     => $request->end_date,
            'resources'    => $resources, // <-- aqui sem json_encode
            'driver_id'    => $request->driver_id,
            'status'       => $request->status,
            'total_amount' => $totalAmount,
        ]);


        return redirect()->route('reserves.index')->with('success', 'Reserva atualizada com sucesso!');
    }

    /**
     * Deletar reserva
     */
    public function destroy($id)
    {
        $reserve = Reserve::findOrFail($id);
        $reserve->delete();

        return redirect()->route('reserves.index')->with('success', 'Reserva removida com sucesso!');
    }
}


