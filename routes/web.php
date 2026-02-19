<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

// Route statis
Route::get('/profile', function () {
    return 'ini adalah halaman profil.';
});

//Route Dengan Paarameter
Route::get('/halo/{nama?}', function ($nama = "Tidak Diketahui") {
    return "Halo, nama : " . $nama;
});


// Route Biodata (Menggunaakn HTML <br> agar pindah baris)
Route::get('biodata', function () {
    return 'nama : Alvitho Sipayung <br> NIM : 255410026 <br> Prodi : Teknik Informatika';
});

// Route Dengan Dua Parameter (nama dan nilai)
Route::get('/nilai/{nama}/{nilai}', function ($nama, $nilai) {
    return 'Halo, ' . ($nama) . ', mendapatkan nilai' . $nilai;
});

// Route Nilai data
Route::get('/tampil-nilai/{nama}/{nim}/{prodi}/{nilai}', function ($nama, $nim, $prodi, $nilai) {
    return view('nilai', compact('nama', 'nim', 'prodi', 'nilai'));
});

use app\Http\Controllers\HaloController;

Route::get('/halo', [HaloController::class, 'index']);
Route::get('/halo/{nama}', [HaloController::class, 'sapa']);