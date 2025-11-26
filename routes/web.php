<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\KontakController;

Route::get('/', [FaqController::class, 'index']);

Route::get('/tentang', function () {
    return view('pages.tentang');
});

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/produk', function () {
    return view('pages.produk');
});

Route::get('/kontak', function () {
    return view('pages.kontak');
});

// FORM KONTAK (POST)
Route::post('/kirim-kontak', [KontakController::class, 'kirim'])->name('kontak.kirim');
