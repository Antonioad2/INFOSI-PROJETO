<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ReservationController; 

// Rotas para página inicial e Listagem de carros
Route::get('/', [HomeController::class, 'index'])->name('site.home');
Route::get('/reservation', [HomeController::class, 'reservation'])->name('site.reservation');
Route::get('/car-details/{car_id}', [HomeController::class, 'carDetails'])->name('site.car_details');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('site.abouts_us');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('site.gallery');


// Rotas para o processo de reserva em duas etapas
Route::post('/reservation/step1/{car_id}', [ReservationController::class, 'step1'])->name('site.reservation.step1');
Route::post('/car/{car_id}/book', [ReservationController::class, 'step1'])->name('site.car_book');
Route::get('/reservation/checkout', [ReservationController::class, 'step2'])->name('site.reservation.checkout');
Route::post('/reservation/confirm', [ReservationController::class, 'confirm'])->name('site.reservation.confirm');               