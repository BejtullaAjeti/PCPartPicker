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
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});



//Route::resource("/cpu", CpuController::class);

Route::resource("/gpu", GpuController::class);

Route::resource("/ram", RamController::class);

Route::resource('/tower', TowerController::class);

Route::resource('/cpu_cooler', CpuCoolerController::class);

Route::resource('/storage', StorageController::class);

Route::resource('/power_supply', PowerSupplyController::class);

Route::resource('/motherboard', MotherboardController::class);


Route::resource('/pc_part', PcPartController::class);

Route::post('/pc_part/create', [PcPartController::class, 'store']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/admin/home/cpu', [App\Http\Controllers\CpuController::class, 'index'])->name('index.cpu')->middleware('is_admin');
Route::get('/admin/home/cpu/create', [App\Http\Controllers\CpuController::class, 'create'])->name('create.cpu')->middleware('is_admin');
Route::post('/admin/home/cpu/store', [App\Http\Controllers\CpuController::class, 'store'])->name('store.cpu')->middleware('is_admin');

Route::get('/cpu/details/{id}', [App\Http\Controllers\CpuController::class, 'show'])->name('show.cpu.details');
//Route::get('/admin/home/cpu/{id}/edit', [App\Http\Controllers\CpuController::class, 'edit'])->name('edit.cpu')->middleware('is_admin');
//Route::put('/admin/home/cpu/{id}/update', [App\Http\Controllers\CpuController::class, 'update'])->name('update.cpu')->middleware('is_admin');;
Route::get('/cpu/edit/{id}', [App\Http\Controllers\CpuController::class, 'edit'])->name('edit.cpu');
//Route::put('/cpu/update/{id}', [App\Http\Controllers\CpuController::class, 'update'])->name('update.cpu');
Route::put('admin/home/cpu/{id}', [CpuController::class, 'update'])->name('cpu.update');



Route::put('/admin/home/cpu/update', [App\Http\Controllers\CpuController::class, 'update'])->name('update.cpu')->middleware('is_admin');
Route::delete('/admin/home/cpu/delete/{id}', [App\Http\Controllers\CpuController::class, 'destroy'])->name('delete.cpu')->middleware('is_admin');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
