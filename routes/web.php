<?php

use App\Http\Controllers\Frontend\DoctorController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServiceController;
use Illuminate\Support\Facades\Route;

// frontend
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
