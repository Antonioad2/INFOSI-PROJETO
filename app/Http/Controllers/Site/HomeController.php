<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Car; // Correct namespace for the Car model
use App\Model\Driver;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch all cars with their related data (brand, models, color, fuel)
        $cars = Car::with(['brand', 'models', 'color', 'fuel'])->where('status', 'available')->get(); // 🔹 só traz disponíveis;

        // Pass the cars to the view
        return view('site.home.index', compact('cars')); // Add 'cars' to compact()
    }

    public function carList(Request $request)
    {
        $pickup_location = $request->input('pickup_location');
        $dropoff_location = $request->input('dropoff_location');
        $pickup_datetime = $request->input('pickup_datetime');
        $dropoff_datetime = $request->input('dropoff_datetime');
        $category = $request->input('category'); // se você quiser filtrar por categoria

        // Query inicial: só disponíveis
        $cars = Car::with(['brand', 'models', 'color', 'fuel'])->where('status', 'available');

        // Aplica filtros se existirem
        if ($category) {
            $cars->where('category', $category);
        }
        if ($pickup_location) {
            $cars->where('pickup_location', $pickup_location); // suposição que tenha coluna
        }
        if ($dropoff_location) {
            $cars->where('dropoff_location', $dropoff_location); // suposição que tenha coluna
        }

        $cars = $cars->get();

        // Retorna para a view de listagem de carros
        return view('site.reservation.car-list.index', compact('cars', 'pickup_location', 'dropoff_location', 'pickup_datetime', 'dropoff_datetime', 'category'));
    }


    public function carLocation()
    {
        // Fetch all cars with their related data (brand, models, color, fuel)
        $cars = Car::with(['brand', 'models', 'color', 'fuel'])->where('status', 'available')->get(); // 🔹 só traz disponíveis;

        // Pass the cars to the view
        return view('site.reservation.car-location.index', compact('cars'));
    }

    public function carServices()
    {
        // Fetch all cars with their related data (brand, models, color, fuel)
        $cars = Car::with(['brand', 'models', 'color', 'fuel'])->where('status', 'available')->get(); // 🔹 só traz disponíveis;

        // Pass the cars to the view
        return view('site.reservation.car-services.index', compact('cars'));
    }

    public function carBilling()
    {
        // Fetch all cars with their related data (brand, models, color, fuel)
        $cars = Car::with(['brand', 'models', 'color', 'fuel'])->where('status', 'available')->get(); // 🔹 só traz disponíveis;

        // Pass the cars to the view
        return view('site.reservation.car-billing.index', compact('cars'));
    }

    public function carPayment()
    {
        // Fetch all cars with their related data (brand, models, color, fuel)
        $cars = Car::with(['brand', 'models', 'color', 'fuel'])->where('status', 'available')->get(); // 🔹 só traz disponíveis;

        // Pass the cars to the view
        return view('site.reservation.car-payment.index', compact('cars'));
    }

    public function carConfirmed()
    {
        // Fetch all cars with their related data (brand, models, color, fuel)
        $cars = Car::with(['brand', 'models', 'color', 'fuel'])->where('status', 'available')->get(); // 🔹 só traz disponíveis;

        // Pass the cars to the view
        return view('site.reservation.car-confirmed.index', compact('cars'));
    }

    public function carDetails($car_id)
    {
        $car = Car::with(['brand', 'models', 'color', 'fuel', 'supplier'])->findOrFail($car_id);
        return view('site.reservation.car-details.index', compact('car'));
    }
}
