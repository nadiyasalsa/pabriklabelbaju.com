@extends('layouts.app')

@section('content')

<section class="auth-page">

    <div class="auth-container">

        <div class="auth-left">
            <div class="auth-logo-wrap">
                <img src="{{ asset('assets/logo_wilova.png') }}" alt="Wilova Logo">
            </div>

            <h1>Welcome Back!</h1>
            <p>
                Masuk ke akun Wilova untuk mengelola kebutuhan label pakaian,
                melihat informasi pesanan, dan menjaga identitas brand kamu tetap profesional.
            </p>

            <div class="auth-highlight">
                <h3>WILOVA</h3>
                <span>Pabrik Label Baju</span>
            </div>
        </div>

        <div class="auth-card">
            <div class="auth-card-header">
                <h2>Login</h2>
                <p>Silakan masuk menggunakan akun Anda</p>
            </div>

            @if ($errors->any())
                <div class="auth-alert">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('login.process') }}" class="auth-form">
                @csrf

                <div class="form-group">
                    <label>Email Address</label>
                    <input 
                        type="email" 
                        name="email" 
                        value="{{ old('email') }}" 
                        placeholder="Masukkan email Anda"
                        required 
                        autofocus
                    >
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input 
                        type="password" 
                        name="password" 
                        placeholder="Masukkan password Anda"
                        required
                    >
                </div>

                <div class="auth-options">
                    <label class="remember-box">
                        <input type="checkbox" name="remember">
                        <span>Remember me</span>
                    </label>

                    <a href="#">Forgot password?</a>
                </div>

                <button type="submit" class="auth-button">
                    Login
                </button>

                <div class="auth-divider">
                    <span>atau</span>
                </div>

                <a href="{{ route('register') }}" class="auth-secondary-button">
                    Buat Akun Baru
                </a>
            </form>
        </div>

    </div>

</section>

@endsection