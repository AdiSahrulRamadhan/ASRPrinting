<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

Route::get('/', function () {
    return view('welcome');
});

// Halaman Beranda
Route::get('/Beranda', [ServiceController::class, 'index'])->name('beranda');

// Halaman Lainnya
Route::get('/Profil', [ServiceController::class, 'profil'])->name('profil');
Route::get('/Layanan', [ServiceController::class, 'layanan'])->name('layanan');
Route::get('/Informasi', [ServiceController::class, 'informasi'])->name('informasi');
Route::get('/Berita', [ServiceController::class, 'berita'])->name('berita');
Route::get('/Galeri', [ServiceController::class, 'galeri'])->name('galeri');
Route::get('/Kontak', [ServiceController::class, 'kontak'])->name('kontak');
