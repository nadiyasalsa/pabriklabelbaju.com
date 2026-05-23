@extends('layouts.app')

@section('content')

<section class="wilova-auth-page">

    <div class="auth-breadcrumb">
        <a href="{{ route('home') }}">Home</a>
        <span>›</span>
        <a href="{{ route('admin.login') }}">Admin Login</a>
    </div>

    <div class="wilova-auth-container admin-login-layout">

        <div class="wilova-auth-card">
            <div class="auth-card-title">
                <h2>Admin Login</h2>
                <p>Masuk ke panel admin untuk mengelola website Wilova</p>
            </div>

            @if ($errors->any())
                <div class="auth-alert">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login.process') }}">
                @csrf

                <div class="wilova-form-group">
                    <label>Admin Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email admin" required autofocus>
                </div>

                <div class="wilova-form-group">
                    <label>Admin Password</label>
                    <input type="password" name="password" placeholder="Masukkan password admin" required>
                </div>

                <div class="auth-row-option">
                    <label>
                        <input type="checkbox" name="remember">
                        Remember me
                    </label>
                </div>

                <button type="submit" class="wilova-auth-submit admin-submit">
                    Login sebagai Admin
                </button>

                <div class="auth-divider">
                    <span>atau</span>
                </div>

                <a href="{{ route('login') }}" class="wilova-auth-secondary">
                    Masuk sebagai User
                </a>
            </form>
        </div>

        <div class="wilova-auth-visual admin-visual">
            <img src="{{ asset('images/logo.png') }}" alt="Wilova Logo" class="auth-logo-main">

            <h1>Admin Panel</h1>
            <p>
                Kelola produk, testimoni, artikel, dan informasi profil perusahaan
                melalui dashboard admin Wilova.
            </p>

            <div class="auth-small-info">
                <h3>Management Area</h3>
                <span>Product • Testimoni • Article • Profile</span>
            </div>
        </div>

    </div>

</section>

@endsection