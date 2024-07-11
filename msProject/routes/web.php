<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PersonController;

Route::get('/', [EventController::class, 'index'])->name('home');
Route::resource('events', EventController::class);
Route::resource('people', PersonController::class);