<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\MakananController;
use App\Models\Galeri;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/tentang', [HomeController::class, 'tentang'])->name('tentang');

Route::get('/berita', [HomeController::class, 'berita'])->name('berita');

Route::get('/galeri', [MakananController::class, 'index'])->name('galeri');

Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');

// Route untuk kirim pesan dari form kontak
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');
