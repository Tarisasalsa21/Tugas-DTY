<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Rute ini akan menampilkan halaman beranda.blade.php saat website diakses
Route::get('/', function () {
    return view('beranda');
});

// Rute ini untuk halaman kontak yang sudah kita buat sebelumnya
Route::get('/contact-us', function () {
    return view('contact');
});