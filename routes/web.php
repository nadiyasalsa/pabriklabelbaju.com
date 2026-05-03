<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

Route::view('/', 'home')->name('home');

Route::view('/artikel', 'artikel')->name('artikel');
Route::view('/kontak', 'kontak')->name('kontak');
Route::view('/produk', 'produk')->name('produk');
Route::view('/profil', 'profil')->name('profil');
Route::view('/testimonial', 'testimonial')->name('testimonial');

/* login - user */

Route::get('/login', function () {
    return view('auth.login');
})->middleware('guest')->name('login');

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials, $request->boolean('remember'))) {
        $request->session()->regenerate();

        if (Auth::user()->role === 'admin') {
            Auth::logout();

            return back()->withErrors([
                'email' => 'Akun admin harus login melalui halaman Admin Login.',
            ])->onlyInput('email');
        }

        return redirect()->route('user.dashboard');
    }

    return back()->withErrors([
        'email' => 'Email atau password user salah.',
    ])->onlyInput('email');
})->middleware('guest')->name('login.process');

/* register user */

Route::get('/register', function () {
    return view('auth.register');
})->middleware('guest')->name('register');

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
        'role' => 'user',
    ]);

    Auth::login($user);
    $request->session()->regenerate();

    return redirect()->route('user.dashboard');
})->middleware('guest')->name('register.process');

/* login - admin */

Route::get('/admin/login', function () {
    return view('auth.admin-login');
})->middleware('guest')->name('admin.login');

Route::post('/admin/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials, $request->boolean('remember'))) {
        $request->session()->regenerate();

        if (Auth::user()->role !== 'admin') {
            Auth::logout();

            return back()->withErrors([
                'email' => 'Akun ini bukan akun admin.',
            ])->onlyInput('email');
        }

        return redirect()->route('admin.dashboard');
    }

    return back()->withErrors([
        'email' => 'Email atau password admin salah.',
    ])->onlyInput('email');
})->middleware('guest')->name('admin.login.process');

/* dashboard */

Route::get('/dashboard', function () {
    if (Auth::user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }

    return view('dashboard-user');
})->middleware('auth')->name('user.dashboard');

Route::get('/admin/dashboard', function () {
    if (Auth::user()->role !== 'admin') {
        abort(403, 'Anda tidak memiliki akses ke halaman admin.');
    }

    return view('dashboard-admin');
})->middleware('auth')->name('admin.dashboard');

/* logout */

Route::post('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
})->middleware('auth')->name('logout');