<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\DriverController;
use App\Http\Controllers\SupplyController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\FuelController;

Route::get('/', [DriverController::class, 'index']);
Route::get('/drivers/dashboard', [DriverController::class, 'dashboard'])->middleware('auth');
Route::get('/drivers/create', [DriverController::class, 'create'])->middleware('auth');
Route::post('/drivers', [DriverController::class, 'store'])->middleware('auth');
Route::get('/drivers/{id}', [DriverController::class, 'show']);
Route::get('/drivers/edit/{id}', [DriverController::class, 'edit'])->middleware('auth');
Route::put('/drivers/update/{id}', [DriverController::class, 'update'])->middleware('auth');
Route::delete('/drivers/{id}', [DriverController::class, 'destroy'])->middleware('auth');

Route::get('/vehicles/dashboard', [VehicleController::class, 'dashboard'])->middleware('auth');
Route::get('/vehicles/create', [VehicleController::class, 'create'])->middleware('auth');
Route::post('/vehicles', [VehicleController::class, 'store'])->middleware('auth');
Route::get('/vehicles/{id}', [VehicleController::class, 'show']);
Route::get('/vehicles/edit/{id}', [VehicleController::class, 'edit'])->middleware('auth');
Route::put('/vehicles/update/{id}', [VehicleController::class, 'update'])->middleware('auth');
Route::delete('/vehicles/{id}', [VehicleController::class, 'destroy'])->middleware('auth');


Route::get('/supplies/dashboard', [SupplyController::class, 'dashboard'])->middleware('auth');
Route::get('/supplies/create', [SupplyController::class, 'create'])->middleware('auth');
Route::post('/supplies', [SupplyController::class, 'store'])->middleware('auth');
Route::get('/supplies/{id}', [SupplyController::class, 'show']);
Route::get('/supplies/edit/{id}', [SupplyController::class, 'edit'])->middleware('auth');
Route::put('/supplies/update/{id}', [SupplyController::class, 'update'])->middleware('auth');
Route::delete('/supplies/{id}', [SupplyController::class, 'destroy'])->middleware('auth');

Route::get('/fuels/dashboard', [FuelController::class, 'dashboard'])->middleware('auth');
Route::get('/fuels/create', [FuelController::class, 'create'])->middleware('auth');
Route::post('/fuels', [FuelController::class, 'store'])->middleware('auth');
Route::get('/fuels/{id}', [FuelController::class, 'show']);
Route::get('/fuels/edit/{id}', [FuelController::class, 'edit'])->middleware('auth');
Route::put('/fuels/update/{id}', [FuelController::class, 'update'])->middleware('auth');
Route::delete('/fuels/{id}', [FuelController::class, 'destroy'])->middleware('auth');

Route::get('/dashboard', function() {
    return redirect('/');
});

