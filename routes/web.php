<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\TentangController as AdminTentangController;
use App\Http\Controllers\Admin\BeritaController as AdminBeritaController; 
use App\Http\Controllers\Admin\GaleriController as AdminGaleriController;


// ==========================================
// 1. RUTE PENGUNJUNG / PUBLIK
// ==========================================
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang', [TentangController::class, 'index'])->name('tentang');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('/kontak', [KontakController::class, 'kontak'])->name('kontak');
Route::post('/kontak', [KontakController::class, 'store'])->name('kontak.store');


// ==========================================
// 2. RUTE AUTHENTICATION ADMIN
// ==========================================
// Menampilkan form login (GET)
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
// Memproses data saat tombol login diklik (POST)
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');
// Proses logout admin
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');


// ==========================================
// 3. RUTE ADMIN (Dilindungi Middleware)
// ==========================================
Route::middleware(['admin'])->prefix('admin')->name('admin.')->group(function () {
    
    // 1: Tentang (Menggunakan URL /admin/tentang)
    Route::get('/tentang', [AdminTentangController::class, 'index'])->name('tentang.index');
    Route::post('/tentang/{id}', [AdminTentangController::class, 'update'])->name('tentang.update');

    // 2: Berita
    Route::resource('berita', AdminBeritaController::class);
    
    // 3: Galeri
    Route::resource('galeri', AdminGaleriController::class); 

});