<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;

    /* Rota Principal */
Route::get('/', [HomeController::class, 'index'])->name('home');

    /* Rotas para listagem de carros */
Route::get('/car/{car_id}', [HomeController::class, 'carDetails'])->name('car.details');
Route::get('/car-list', [HomeController::class, 'carList'])->name('site.car-list');
Route::get('/car/{id}/book', [HomeController::class, 'carBook'])->name('car.book');
Route::get('/car-location', [HomeController::class, 'carLocation'])->name('site.car-location');
Route::get('/car-services', [HomeController::class, 'carServices'])->name('site.car-services');

