<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\vehiclecontroller;
use App\Livewire\Counter;
use App\Livewire\CreateVehicle;
use App\Livewire\Vehicle;
use Illuminate\Support\Facades\Route;


// Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/', Vehicle::class)->name('home.index'); //Rota livewire
Route::get('/vehicles/{vehicle}', [vehiclecontroller::class, 'show'])->name('vehicle.show'); //e usar laravel padrao  //Setar middleware para acessar apenas logado


//Rota de criar conta
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/create/vehicle', CreateVehicle::class)->name('vehicle.create')->middleware('auth');

// Route::post('/create/vehicle', [Vehicle::class])->name('vehicle.create');
// Route::post('/create/vehicle', [vehiclecontroller::class, 'store_vehicle'])->name('store_vehicle');


//rota de login
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.store');
