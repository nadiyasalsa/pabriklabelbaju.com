<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

Route::view('/', 'home')->name('home');

Route::view('/produk', 'produk')->name('produk');
Route::view('/testimonial', 'testimonial')->name('testimonial');
Route::view('/artikel', 'artikel')->name('artikel');
Route::view('/profil', 'profil')->name('profil');
Route::view('/kontak', 'kontak')->name('kontak');

/* auth manual */

// Halaman Login
Route::get('/login', function () {
    return view('auth.login');
})->middleware('guest')->name('login');

// Proses Login
Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials, $request->boolean('remember'))) {
        $request->session()->regenerate();

        return redirect()->intended('/dashboard');
    }

    return back()->withErrors([
        'email' => 'Email atau password yang Anda masukkan salah.',
    ])->onlyInput('email');
})->middleware('guest')->name('login.process');

// Halaman Register
Route::get('/register', function () {
    return view('auth.register');
})->middleware('guest')->name('register');

// Proses Register
Route::post('/register', function (Request $request) {
    $data = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255', 'unique:users,email'],
        'password' => ['required', 'min:8', 'confirmed'],
    ]);

    $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
    ]);

    Auth::login($user);

    $request->session()->regenerate();

    return redirect('/dashboard');
})->middleware('guest')->name('register.process');

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Logout
Route::post('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
})->middleware('auth')->name('logout');