<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Car;

class HomeController extends Controller
{
    public function index()
    {
        // Pega todos os carros do banco
        $cars = Car::with(['brand', 'models'])->get();

        // Envia para a view
        return view('site.home.index', compact('cars'));
    }

    public function reservation(Request $request)
    {
        // Captura os filtros do form
        $local      = $request->input('location'); // local de retirada
        $dataRetira = $request->input('data_retirada');
        $dataDev    = $request->input('data_devolucao');
        $carId    = $request->input('car_id'); // id do carro selecionado

        // Query inicial
        $query = Car::with(['brand', 'models']);

        // Filtro por carro específico
        if ($carId) {
            $query->where('id', $carId);
        }

        $cars = $query->get();

        // Retorna para a view de listagem
        return view('site.home.reservation.index', compact('cars', 'local', 'dataRetira', 'dataDev'));
    }

    
}

