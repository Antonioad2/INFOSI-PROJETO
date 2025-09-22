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
    // Retrieve filter inputs
    $pickup_location = $request->input('pickup_location');
    $dropoff_location = $request->input('dropoff_location');
    $pickup_datetime = $request->input('pickup_datetime');
    $dropoff_datetime = $request->input('dropoff_datetime');
    $brands = $request->input('brands', []); // Array of selected brands
    $categories = $request->input('categories', []); // Array of selected categories
    $years = $request->input('years', []); // Array of selected years
    $colors = $request->input('colors', []); // Array of selected colors
    $seats = $request->input('seats', []); // Array of selected seat counts
    $transmissions = $request->input('transmissions', []); // Array of selected transmissions
    $min_price = $request->input('min_price');
    $max_price = $request->input('max_price');

    // Base query: only available cars
    $query = Car::with(['brand', 'models', 'color', 'fuel'])->where('status', 'available');

    // Apply filters
    if (!empty($pickup_location)) {
        $query->where('location', 'LIKE', "%{$pickup_location}%"); // Assuming 'location' column exists
    }

    if (!empty($dropoff_location)) {
        $query->where('location', 'LIKE', "%{$dropoff_location}%"); // Assuming 'location' column exists
    }

    if (!empty($brands)) {
        $query->whereIn('brand_id', function ($subQuery) use ($brands) {
            $subQuery->select('id')->from('brands')->whereIn('name', $brands);
        });
    }

    if (!empty($categories)) {
        $query->whereIn('category', $categories);
    }

    if (!empty($years)) {
        $query->whereIn('manufacture_date', $years);
    }

    if (!empty($colors)) {
        $query->whereIn('color_id', function ($subQuery) use ($colors) {
            $subQuery->select('id')->from('colors')->whereIn('name', $colors);
        });
    }

    if (!empty($seats)) {
        $query->whereIn('number_of_seats', $seats);
    }

    if (!empty($transmissions)) {
        $query->whereIn('transmission', $transmissions);
    }

    if (!empty($min_price) && !empty($max_price)) {
        $query->whereBetween('price_per_day', [$min_price, $max_price]);
    } elseif (!empty($min_price)) {
        $query->where('price_per_day', '>=', $min_price);
    } elseif (!empty($max_price)) {
        $query->where('price_per_day', '<=', $max_price);
    }

    // Execute the query
    $cars = $query->get();

    // Return to the view with the filtered cars and filter values
    return view('site.reservation.car-list.index', compact(
        'cars',
        'pickup_location',
        'dropoff_location',
        'pickup_datetime',
        'dropoff_datetime',
        'brands',
        'categories',
        'years',
        'colors',
        'seats',
        'transmissions',
        'min_price',
        'max_price'
    ));
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
        // Pega o ID da última reserva criada na sessão
        $reservationId = session('last_reservation_id');

        if (!$reservationId) {
            return redirect()->route('home')
                ->with('error', 'Reserva não encontrada ou sessão expirada.');
        }

        // Busca a reserva no banco
        $reservation = \App\Model\Reserve::with(['car', 'client', 'driver'])
            ->findOrFail($reservationId);

        return view('site.reservation.car-confirmed.index', compact('reservation'));
    }

    public function carDetails($car_id)
    {
        $car = Car::with(['brand', 'models', 'color', 'fuel', 'supplier'])->findOrFail($car_id);
        return view('site.reservation.car-details.index', compact('car'));
    }
}


    
  