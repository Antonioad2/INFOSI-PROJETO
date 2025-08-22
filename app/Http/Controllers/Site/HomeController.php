<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Car;

class HomeController extends Controller
{
    public function index()
    {
        // Envia para a view
        return view('site.home.index');
    }

    public function reservation(Request $request)
    {
        // Captura os filtros do form
        $local      = $request->input('location'); // local de retirada
        $dataRetira = $request->input('data_retirada');
        $dataDev    = $request->input('data_devolucao');
        $carId    = $request->input('car_id'); // id do carro selecionado

        // Query inicial
        $cars = Car::with(['brand', 'models', 'color', 'fuel'])->get();


        // Retorna para a view de listagem
        return view('site.home.reservation.index', compact('cars', 'local', 'dataRetira', 'dataDev'));
    }

    public function carDetails()
    {
        // Envia para a view
        
        return view('site.home.car_details.index');
    }
    
}

