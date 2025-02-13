<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\vehiclecontroller;
use App\Livewire\Counter;
use App\Livewire\Vehicle;
use Illuminate\Support\Facades\Route;


// Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/', Vehicle::class)->name('home.index'); //Rota livewire
Route::get('/vehicles/{vehicle}', [vehiclecontroller::class, 'show'])->name('vehicle.show'); //e usar laravel padrao  //Setar middleware para acessar apenas logado


Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


