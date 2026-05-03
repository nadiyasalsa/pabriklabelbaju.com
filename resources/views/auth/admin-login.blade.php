@extends('layouts.app')

@section('content')

<section class="auth-page admin-auth-page">
    <div class="auth-container admin-auth-container">

        <div class="auth-card">
            <div class="auth-card-header">
                <h2>Admin Login</h2>
                <p>Masuk ke panel admin untuk mengelola website Wilova</p>
            </div>

            @if ($errors->any())
                <div class="auth-alert">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login.process') }}" class="auth-form">
                @csrf

                <div class="form-group">
                    <label>Admin Email</label>
                    <input 
                        type="email" 
                        name="email" 
                        value="{{ old('email') }}"
                        placeholder="Masukkan email admin"
                        required
                    >
                </div>

                <div class="form-group">
                    <label>Admin Password</label>
                    <input 
                        type="password" 
                        name="password"
                        placeholder="Masukkan password admin"
                        required
                    >
                </div>

                <button type="submit" class="auth-button admin-auth-button">
                    Login sebagai Admin
                </button>

                <div class="auth-divider">
                    <span>atau</span>
                </div>

                <a href="{{ route('login') }}" class="auth-secondary-button">
                    Masuk sebagai User
                </a>
            </form>
        </div>

        <div class="auth-left admin-auth-left">
            <div class="auth-logo-wrap">
                <img src="{{ asset('images/logo.png') }}" alt="Wilova Logo">
            </div>

            <h1>Admin Panel</h1>
            <p>
                Kelola produk, testimoni, artikel, dan informasi profil perusahaan
                melalui dashboard admin Wilova.
            </p>

            <div class="auth-highlight">
                <h3>Management Area</h3>
                <span>Product • Testimoni • Article • Profile</span>
            </div>
        </div>

    </div>
</section>

@endsection