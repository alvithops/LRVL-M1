<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Selamat Datang di PayungDev';
});

// Route statis
Route::get('/profile', function () {
    return 'ini adalah halaman profil.';
});

//Route Dengan Paarameter
Route::get('/halo/{nama}', function ($nama) {
    return 'halo, '. $namakuadalaalvith;
});
