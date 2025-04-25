<?php

use Illuminate\Support\Facades\Route;

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/cara-sewa', function () {
    return view('cara-sewa');
});

Route::get('/kontak', function () {
    return view('kontak');
});


