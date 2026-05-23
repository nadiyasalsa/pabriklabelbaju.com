@extends('layouts.app')

@section('content')

<section class="auth-page">

    <div class="auth-container register-container">

        <div class="auth-card">
            <div class="auth-card-header">
                <h2>Register</h2>
                <p>Buat akun baru untuk mulai menggunakan layanan Wilova</p>
            </div>

            @if ($errors->any())
                <div class="auth-alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register.process') }}" class="auth-form">
                @csrf

                <div class="form-group">
                    <label>Full Name</label>
                    <input 
                        type="text" 
                        name="name" 
                        value="{{ old('name') }}" 
                        placeholder="Masukkan nama lengkap"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Email Address</label>
                    <input 
                        type="email" 
                        name="email" 
                        value="{{ old('email') }}" 
                        placeholder="Masukkan email aktif"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input 
                        type="password" 
                        name="password" 
                        placeholder="Minimal 8 karakter"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Confirm Password</label>
                    <input 
                        type="password" 
                        name="password_confirmation" 
                        placeholder="Ulangi password"
                        required
                    >
                </div>

                <button type="submit" class="auth-button">
                    Register
                </button>

                <div class="auth-divider">
                    <span>atau</span>
                </div>

                <a href="{{ route('login') }}" class="auth-secondary-button">
                    Sudah Punya Akun? Login
                </a>
            </form>
        </div>

        <div class="auth-left register-left">
            <div class="auth-logo-wrap">
                <img src="{{ asset('assets/logo_wilova.png') }}" alt="Wilova Logo">
            </div>

            <h1>Create Your Account</h1>
            <p>
                Daftar sekarang untuk mendapatkan pengalaman pemesanan label pakaian
                yang lebih mudah, rapi, dan sesuai kebutuhan brand kamu.
            </p>

            <div class="auth-highlight">
                <h3>Start Your Brand Journey</h3>
                <span>with Wilova Label</span>
            </div>
        </div>

    </div>

</section>

@endsection