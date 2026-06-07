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
Route::view('/artikel', 'artikel')->name('artikel');
Route::view('/artikel/detail', 'artikel-detail')->name('artikel.detail');
Route::view('/profil', 'profil')->name('profil');
Route::view('/kontak', 'kontak')->name('kontak');