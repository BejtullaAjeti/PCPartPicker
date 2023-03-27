<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function(){
    return view('firstpage');
});



Route::resource("/cpu",CpuController::class);

Route::resource("/gpu",GpuController::class);

Route::resource("/ram",RamController::class);

Route::resource('/casee',CaseeController::class);

Route::resource('/cpu_cooler',CpuCoolerController::class);

Route::resource('/storage',StorageController::class);

Route::resource('/power_supplie',PowerSupplyController::class);

Route::resource('/motherboard',MotherboardController::class);
