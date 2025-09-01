<?php
namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Car; // Correct namespace for the Car model

class HomeController extends Controller
{
    public function index()
    {
        // Fetch all cars with their related data (brand, models, color, fuel)
        $cars = Car::with(['brand', 'models', 'color', 'fuel'])->get();

        // Pass the cars to the view
        return view('site.home.index', compact('cars')); // Add 'cars' to compact()
    }

    // Other methods (reservation, carBook, carDetails) remain unchanged
    public function reservation(Request $request)
    {
        // Captura os filtros do form
        $local      = $request->input('location'); // local de retirada
        $dataRetira = $request->input('data_retirada');
        $dataDev    = $request->input('data_devolucao');
        $carId      = $request->input('car_id'); // id do carro selecionado

        // Query inicial
        $cars = Car::with(['brand', 'models', 'color', 'fuel'])->get();

        // Retorna para a view de listagem
        return view('site.home.reservation.index', compact('cars', 'local', 'dataRetira', 'dataDev'));
    }

    public function carBook(Request $request)
    {
        $carId = $request->get('car_id');

        // Busca o carro no banco
        $car = Car::with(['brand', 'models'])->findOrFail($carId);

        return view('site.home.car_book.index', compact('car'));
    }

    public function carDetails($car_id)
    {
        // Fetch the car with its related data
        $car = Car::with(['brand', 'models', 'color', 'fuel'])->findOrFail($car_id);

        // Fetch similar cars (e.g., same category, excluding the current car)
        $cars = Car::with(['brand', 'models', 'color', 'fuel'])
            ->where('category', $car->category)
            ->where('id', '!=', $car->id)
            ->take(3)
            ->get();

        // Pass the car and similar cars to the view
        return view('site.home.car_details.index', compact('car', 'cars'));
    }
}