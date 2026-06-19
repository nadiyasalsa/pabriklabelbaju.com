<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Halaman Utama
|--------------------------------------------------------------------------
*/

Route::view('/', 'home')->name('home');
Route::view('/produk', 'produk')->name('produk');
Route::view('/testimonial', 'testimonial')->name('testimonial');
Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

Route::get('/artikel/detail/{slug?}', function ($slug = 'sistem-gaji-kerja-konveksi') {
    return view('artikel', [
        'slug' => $slug,
    ]);
})->name('artikel.detail');
Route::view('/profil', 'profil')->name('profil');
Route::view('/kontak', 'kontak')->name('kontak');