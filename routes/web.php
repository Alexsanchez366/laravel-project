<?php

use App\Http\Controllers\VehiculoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntregadoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/vehiculos',[VehiculoController::class,'index']);
Route::get('/entregados',[EntregadoController::class, 'index']);

Route::get('/vehiculos/create',[VehiculoController::class,'create']);
Route::get('/entregados/create',[EntregadoController::class,'create']);


Route::post('/vehiculos',[VehiculoController::class,'store']);
Route::post('/entregados',[EntregadoController::class,'store']);

Route::get('/vehiculos/{id}',[VehiculoController::class,'edit']);
Route::put('/vehiculos/{id}',[VehiculoController::class, 'update']);
Route::delete('/vehiculos/{id}',[VehiculoController::class, 'destroy']);


