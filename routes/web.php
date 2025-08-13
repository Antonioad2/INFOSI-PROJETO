<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\ModelsController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\FuelController;
use App\Http\Controllers\Admin\CarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*-------------------------------------------------------
                    Dashboard routes
-------------------------------------------------------*/
Route::get('/', function () {
    return view('dashboard.crm.index');
});

Route::get('/analytics', function () {
    return view('admin.dashboard.Analytics.index');
});

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/analytics', [DashboardController::class, 'analytics'])->name('analytics');

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

/*-------------------------------------------------------
                    Proposal routes
-------------------------------------------------------*/
/*Route::get('/proposal', function () {



    return view('proposal.proposal.index');


}); 


Route::get('/proposal/proposalView', function () {


    return view('proposal.proposalView.index');


});


Route::get('/proposal/proposalEdit', function () {


    return view('proposal.proposalEdit.index');


});


Route::get('/proposal/proposalCreate', function () {


    return view('proposal.proposalCreate.index');


});*/

/*-------------------------------------------------------
                    reports routes
-------------------------------------------------------*/

/*Route::get('/Reports/reportsSales', function () {


    return view('reports.sales.index');


});
Route::get('/Reports/reportsLeads', function () {


    return view('reports.leads.index');


});
Route::get('/Reports/reportsProject', function () {


    return view('reports.project.index');


});
Route::get('/Reports/reportsTimesheets', function () {


    return view('reports.timesheets.index');


});*/

/*-------------------------------------------------------
                    aplications routes
-------------------------------------------------------*/

/*Route::get('/Applications/appsChat', function () {


    return view('applications.chat.index');


});
Route::get('/Applications/appsEmail', function () {


    return view('applications.email.index');


});
Route::get('/Applications/appsTasks', function () {


    return view('applications.tasks.index');


});
Route::get('/Applications/appsNotes', function () {


    return view('applications.notes.index');


});
Route::get('/Applications/appsStorage', function () {


    return view('applications.storage.index');


});
Route::get('/Applications/appsCalendar', function () {


    return view('applications.calendar.index');


});*/

/*-------------------------------------------------------
                    customers routes
-------------------------------------------------------*/

/*Route::get('/customers', function(){

    return view('customers.customers.index');

});
Route::get('/customers/customersView', function(){

    return view('customers.customersView.index');

});
Route::get('/customers/customersCreate', function(){

    return view('customers.customersCreate.index');

}); */

/*-------------------------------------------------------
                    payment routes
-------------------------------------------------------*/

Route::get('/payment', function(){

    return view('payment.payment.index');

});
Route::get('/payment/invoiceView', function(){

    return view('payment.invoiceView.index');

});
Route::get('/payment/invoiceCreate', function(){

    return view('payment.invoiceCreate.index');

});


/*-------------------------------------------------------
                    widgets routes
-------------------------------------------------------*/

/*Route::get('/widgets/lists', function () {
    return view('widgets.lists.index');
});

Route::get('/widgets/tables', function () {
    return view('widgets.tables.index');
});

Route::get('/widgets/charts', function () {
    return view('widgets.charts.index');
});

Route::get('/widgets/miscellaneous', function () {
    return view('widgets.miscellaneous.index');
});

Route::get('/widgets/statistics', function () {
    return view('widgets.statistics.index');
});*/


