<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/tentang', function () {
    return view('pages.tentang');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/produk', function () {
    return view('pages.produk');
});

Route::get('/kontak', function () {
    return view('pages.kontak');
});
