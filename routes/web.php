<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\ModelsController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\FuelController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\DriverController;
use App\Http\Controllers\Admin\ReserveController;
use App\Http\Controllers\Site\ReservationController; 
use App\Http\Controllers\Site\CarBookController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\UserController;

/*-------------------------------------------------------
                    Site routes (PÚBLICAS - sem proteção)
-------------------------------------------------------*/

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

/*---------- FIM Site routes -------------*/

/*-------------------------------------------------------
                    Rotas Administrativas (PROTEGIDAS)
-------------------------------------------------------*/

// Grupo principal de admin: requer autenticação E role 'admin'
Route::prefix('admin')->name('admin.')->middleware(['auth', 'check.nivel:admin'])->group(function () {

    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/analytics', [DashboardController::class, 'analytics'])->name('analytics');
    Route::get('/reports/reportsSales', [DashboardController::class, 'reportsSales'])->name('reportsSales');
    Route::get('/reports/reportsLeads', [DashboardController::class, 'reportsLeads'])->name('reportsLeads');
    Route::get('/reports/reportsProject', [DashboardController::class, 'reportsProject'])->name('reportsProject');
    Route::get('/reports/reportsTimesheets', [DashboardController::class, 'reportsTimesheets'])->name('reportsTimesheets');

    // User routes (apenas admins podem gerenciar usuários)
    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/', [UserController::class, 'store'])->name('store');
        Route::get('userView/{user}', [UserController::class, 'show'])->name('show');
        Route::get('userEdit/{user}/edit', [UserController::class, 'edit'])->name('edit');
        Route::put('/{user}', [UserController::class, 'update'])->name('update');
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('destroy');
    });

    // color routes
    Route::prefix('colors')->name('colors.')->group(function () {
        Route::get('/', [ColorController::class, 'index'])->name('index');
        Route::get('/create', [ColorController::class, 'create'])->name('create');
        Route::post('/', [ColorController::class, 'store'])->name('store');
        Route::get('colorView/{color}', [ColorController::class, 'show'])->name('show');
        Route::get('colorEdit/{color}/edit', [ColorController::class, 'edit'])->name('edit');
        Route::put('/{color}', [ColorController::class, 'update'])->name('update');
        Route::get('/{color}', [ColorController::class, 'destroy'])->name('destroy');
        Route::get('/trashed', [ColorController::class, 'trashed'])->name('trashed');
        Route::post('/{color}/restore', [ColorController::class, 'restore'])->name('restore');
    });

    // modelos routes
    Route::prefix('models')->name('models.')->group(function () {
        Route::get('/', [ModelsController::class, 'index'])->name('index');
        Route::get('/create', [ModelsController::class, 'create'])->name('create');
        Route::post('/', [ModelsController::class, 'store'])->name('store');
        Route::get('modelView/{models}', [ModelsController::class, 'show'])->name('show');
        Route::get('modelEdit/{models}/edit', [ModelsController::class, 'edit'])->name('edit');
        Route::put('/{models}', [ModelsController::class, 'update'])->name('update');
        Route::get('/{models}', [ModelsController::class, 'destroy'])->name('destroy');
        Route::get('/trashed', [ModelsController::class, 'trashed'])->name('trashed');
        Route::post('/{models}/restore', [ModelsController::class, 'restore'])->name('restore');
    });

    // brand routes
    Route::prefix('brands')->name('brands.')->group(function () {
        Route::get('/', [BrandController::class, 'index'])->name('index');
        Route::get('/create', [BrandController::class, 'create'])->name('create');
        Route::post('/', [BrandController::class, 'store'])->name('store');
        Route::get('brandView/{brand}', [BrandController::class, 'show'])->name('show');
        Route::get('brandEdit/{brand}/edit', [BrandController::class, 'edit'])->name('edit');
        Route::put('/{brand}', [BrandController::class, 'update'])->name('update');
        Route::get('/{brand}', [BrandController::class, 'destroy'])->name('destroy');
        Route::get('/trashed', [BrandController::class, 'trashed'])->name('trashed');
        Route::post('/{brand}/restore', [BrandController::class, 'restore'])->name('restore');
    });

    // fuel routes
    Route::prefix('fuels')->name('fuels.')->group(function () {
        Route::get('/', [FuelController::class, 'index'])->name('index');
        Route::get('/create', [FuelController::class, 'create'])->name('create');
        Route::post('/', [FuelController::class, 'store'])->name('store');
        Route::get('fuelView/{fuel}', [FuelController::class, 'show'])->name('show');
        Route::get('fuelEdit/{fuel}/edit', [FuelController::class, 'edit'])->name('edit');
        Route::put('/{fuel}', [FuelController::class, 'update'])->name('update');
        Route::get('/{fuel}', [FuelController::class, 'destroy'])->name('destroy');
        Route::get('/trashed', [FuelController::class, 'trashed'])->name('trashed');
        Route::post('/{fuel}/restore', [FuelController::class, 'restore'])->name('restore');
    });

    // car routes
    Route::prefix('cars')->name('cars.')->group(function () {
        Route::get('/', [CarController::class, 'index'])->name('index');
        Route::get('/create', [CarController::class, 'create'])->name('create');
        Route::post('/', [CarController::class, 'store'])->name('store');
        Route::get('carView/{car}', [CarController::class, 'show'])->name('show');
        Route::get('carEdit/{car}/edit', [CarController::class, 'edit'])->name('edit');
        Route::put('/{car}', [CarController::class, 'update'])->name('update');
        Route::get('/{car}', [CarController::class, 'destroy'])->name('destroy');
    });

    Route::get('/get-models-by-brand/{brandId}', [ModelsController::class, 'getModelsByBrand']);

    // supplier routes
    Route::prefix('suppliers')->name('suppliers.')->group(function () {
        Route::get('/', [SupplierController::class, 'index'])->name('index');
        Route::get('/create', [SupplierController::class, 'create'])->name('create');
        Route::post('/', [SupplierController::class, 'store'])->name('store');
        Route::get('supplierView/{supplier}', [SupplierController::class, 'show'])->name('show');
        Route::get('supplierEdit/{supplier}/edit', [SupplierController::class, 'edit'])->name('edit');
        Route::put('/{supplier}', [SupplierController::class, 'update'])->name('update');
        Route::delete('/{supplier}', [SupplierController::class, 'destroy'])->name('destroy');
    });

    // client routes
    Route::prefix('clients')->name('clients.')->group(function () {
        Route::get('/', [ClientController::class, 'index'])->name('index');
        Route::get('/create', [ClientController::class, 'create'])->name('create');
        Route::post('/', [ClientController::class, 'store'])->name('store');
        Route::get('clientView/{client}', [ClientController::class, 'show'])->name('show');
        Route::get('clientEdit/{client}/edit', [ClientController::class, 'edit'])->name('edit');
        Route::put('/{client}', [ClientController::class, 'update'])->name('update');
        Route::delete('/{client}', [ClientController::class, 'destroy'])->name('destroy');
    });

    // driver routes
    Route::prefix('drivers')->name('drivers.')->group(function () {
        Route::get('/', [DriverController::class, 'index'])->name('index');
        Route::get('/create', [DriverController::class, 'create'])->name('create');
        Route::post('/', [DriverController::class, 'store'])->name('store');
        Route::get('driverView/{driver}', [DriverController::class, 'show'])->name('show');
        Route::get('driverEdit/{driver}/edit', [DriverController::class, 'edit'])->name('edit');
        Route::put('/{driver}', [DriverController::class, 'update'])->name('update');
        Route::delete('/{driver}', [DriverController::class, 'destroy'])->name('destroy');
    });

    // reserve routes
    Route::prefix('reserves')->name('reserves.')->group(function () {
        Route::get('/', [ReserveController::class, 'index'])->name('index');
        Route::get('/create', [ReserveController::class, 'create'])->name('create');
        Route::post('/', [ReserveController::class, 'store'])->name('store');
        Route::get('reserveView/{id}', [ReserveController::class, 'show'])->name('show');
        Route::get('reserveEdit/{id}/edit', [ReserveController::class, 'edit'])->name('edit');
        Route::put('/{id}', [ReserveController::class, 'update'])->name('update');
        Route::delete('/{id}', [ReserveController::class, 'destroy'])->name('destroy');
    });

});

// Rotas de autenticação (já protegidas pelo Laravel)
Auth::routes();
Route::get('/home', function () {
    return redirect()->route('admin.dashboard');
});

// Rotas de reset de senha (se precisar, descomente e proteja se necessário)
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');