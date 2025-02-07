<?php

use App\Http\Controllers\vehiclecontroller;
use App\Livewire\Counter;
use App\Livewire\Vehicle;
use Illuminate\Support\Facades\Route;


// Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/home', [vehiclecontroller::class, 'index'])->name('home.index'); // deixar apenas com livewire padrao
Route::get('/vehicles/{vehicle}', [vehiclecontroller::class, 'show'])->name('vehicle.show'); //e usar laravel padrao 

// Route::get('/home', [Vehicle::class])->name('home.index');

// Route::get('/vehicles/{id}', [Vehi])

// Route::get('/counter', Counter::class);
