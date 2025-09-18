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


    /* public function reservation(Request $request)
    {
        // Captura os filtros do form
        $pickup_location      = $request->input('pickup_location'); 
        $startDate = $request->input('start_date');
        $endDate    = $request->input('end_date');
        $carId      = $request->input('car_id'); 
        $category   = $request->input('category'); // <-- Captura categoria

        // Query inicial
        $cars = Car::with(['brand', 'models', 'color', 'fuel'])->where('status', 'available');

        // Aplica filtro por categoria (se existir)
        if ($category) {
            $cars->where('category', $category);
        }

        $cars = $cars->get();

        // Retorna para a view de listagem
        return view('site.home.index', compact('cars', 'pickup_location', 'startDate', 'endDate', 'category'));
    }  */

    public function carBook(Request $request, $car_id)
    {
        $car = Car::with(['brand', 'models'])->findOrFail($car_id);

        // aqui já podes pegar local, datas e extras do $request
        $pickup_location      = $request->input('pickup_location');
        $startDate = $request->input('start_date');
        $endDate   = $request->input('end_date');
        $resources  = $request->input('resources', []);
        $driverId   = $request->input('driver_id');

        return view('site.home.car_book.index', compact('car', 'pickup_location', 'startDate', 'endDate', 'resources', 'driverId'));
    }

    /*     public function carDetails($car_id)
    {
        // Fetch the car with its related data
        $car = Car::with(['brand', 'models', 'color', 'fuel'])->findOrFail($car_id);

        // Fetch similar cars (e.g., same category, excluding the current car)
        $cars = Car::with(['brand', 'models', 'color', 'fuel'])
            ->where('category', $car->category)
            ->where('id', '!=', $car->id)
            ->take(3)
            ->get();

        $drivers = Driver::all();

        // Pass the car and similar cars to the view
        return view('site.home.car_details.index', compact('car', 'cars', 'drivers'));
    } */

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

    /*     public function aboutUs()
    {
        return view('site.about_us.index');
    } */
    /* 
    public function gallery()
    {
        return view('site.galeria.index');
    } */
}
