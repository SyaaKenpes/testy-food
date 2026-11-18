<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;

Route::get('/', function () {
    return view('welcome');
});

// Halaman Utama Landing Page
    Route::get('/', [HomeController::class, 'index']);
    
    // Route untuk kirim pesan dari form kontak
    Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');
