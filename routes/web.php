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
use App\Model\Models;


/*-------------------------------------------------------
                    Site routes
-------------------------------------------------------*/

Route::get('/', [HomeController::class, 'index'])->name('site.home');
Route::get('/reservation', [HomeController::class, 'reservation'])->name('site.reservation');
Route::get('/car-details/{car_id}', [HomeController::class, 'carDetails'])->name('site.car_details');
Route::post('/car-book', [HomeController::class, 'carBook'])->name('site.car_book');


/*-------------------------------------------------------
                    Dashboard routes
-------------------------------------------------------*/

Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/analytics', [DashboardController::class, 'analytics'])->name('analytics');

/*-------------------------------------------------------
                    color routes
-------------------------------------------------------*/

Route::prefix('/admin/colors')->name('colors.')->group(function () {
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

/*-------------------------------------------------------
                    modelos routes
-------------------------------------------------------*/

Route::prefix('/admin/models')->name('models.')->group(function () {
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

/*-------------------------------------------------------
                    brand routes
-------------------------------------------------------*/

Route::prefix('/admin/brands')->name('brands.')->group(function () {
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

/*-------------------------------------------------------
                    fuel routes
-------------------------------------------------------*/

Route::prefix('/admin/fuels')->name('fuels.')->group(function () {
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

Route::prefix('/admin/cars')->name('cars.')->group(function () {
    Route::get('/', [CarController::class, 'index'])->name('index');
    Route::get('/create', [CarController::class, 'create'])->name('create');
    Route::post('/', [CarController::class, 'store'])->name('store');
    Route::get('carView/{car}', [CarController::class, 'show'])->name('show');
    Route::get('carEdit/{car}/edit', [CarController::class, 'edit'])->name('edit');
    Route::put('/{car}', [CarController::class, 'update'])->name('update');
    Route::get('/{car}', [CarController::class, 'destroy'])->name('destroy');
});

Route::get('/get-models-by-brand/{brandId}', [ModelsController::class, 'getModelsByBrand']);

Route::prefix('/admin/suppliers')->name('suppliers.')->group(function () {
    Route::get('/', [SupplierController::class, 'index'])->name('index');
    Route::get('/create', [SupplierController::class, 'create'])->name('create');
    Route::post('/', [SupplierController::class, 'store'])->name('store');
    Route::get('supplierView/{supplier}', [SupplierController::class, 'show'])->name('show');
    Route::get('supplierEdit/{supplier}/edit', [SupplierController::class, 'edit'])->name('edit');
    Route::put('/{supplier}', [SupplierController::class, 'update'])->name('update');
    Route::delete('/{supplier}', [SupplierController::class, 'destroy'])->name('destroy');
});


