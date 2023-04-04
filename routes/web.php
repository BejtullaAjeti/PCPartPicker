<?php

use App\Http\Controllers\CpuController;
use App\Http\Controllers\CpuCoolerController;
use App\Http\Controllers\GpuController;
use App\Http\Controllers\MotherboardController;
use App\Http\Controllers\PowerSupplyController;
use App\Http\Controllers\RamController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\TowerController;
use App\Http\Controllers\PcPartController;
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



Route::resource("/cpu", CpuController::class);

Route::resource("/gpu", GpuController::class);

Route::resource("/ram", RamController::class);

Route::resource('/tower', TowerController::class);

Route::resource('/cpu_cooler', CpuCoolerController::class);

Route::resource('/storage', StorageController::class);

Route::resource('/power_supply', PowerSupplyController::class);

Route::resource('/motherboard', MotherboardController::class);


Route::resource('/pc_part', PcPartController::class);

Route::post('/pc_part/create', [PcPartController::class, 'store']);