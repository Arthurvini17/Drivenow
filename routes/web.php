<?php

use App\Http\Controllers\HomeController;
use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;


Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::get('/counter', Counter::class);
Route::get('/home/{id}',[HomeController::class, 'show'])->name('vehicles.show');
