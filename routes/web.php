<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ReservationController;

/* Páginas principais e listagem de carros */

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/car-list', [HomeController::class, 'carList'])->name('site.car-list');
Route::get('/car/{car_id}', [HomeController::class, 'carDetails'])->name('car.details');
Route::get('/car/{car_id}/book', [HomeController::class, 'carBook'])->name('car.book');

/* Etapas da reserva */
Route::post('/reservation/step1/{car_id}', [ReservationController::class, 'step1'])
    ->name('site.reservation.step1');
Route::post('/reservation/step2/{car_id}', [ReservationController::class, 'step2'])
    ->name('site.reservation.step2');
Route::post('/reservation/step3/{car_id}', [ReservationController::class, 'step3'])
    ->name('site.reservation.step3');
Route::post('/reservation/confirm', [ReservationController::class, 'confirm'])
    ->name('site.reservation.confirm');

/* Checkouts (pode usar como atalhos ou redirecionamentos) */
Route::get('/reservation/checkout', function () {
    // Decide dinamicamente qual view mostrar de acordo com a etapa salva na sessão
    $stage = session('reservation_stage', 1);
    switch ($stage) {
        case 1:
            return view('site.reservation.book-checkout.index');
        case 2:
            return view('site.reservation.details-checkout.index');
        case 3:
            return view('site.reservation.payment.index');
        default:
            return view('site.reservation.finish.index');
    }
})->name('site.reservation.checkout');

/* Página final */
Route::get('/car-confirmed', [HomeController::class, 'carConfirmed'])
    ->name('site.car-confirmed');
