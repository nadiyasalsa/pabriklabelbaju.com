<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wilova - Pabrik Label Baju</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<nav class="navbar">
    <div class="navbar-logo">
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Wilova Logo">
        </a>
    </div>

    <div class="navbar-menu">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('produk') }}">Product</a>
        <a href="{{ route('testimonial') }}">Testimoni</a>
        <a href="{{ route('artikel') }}">Article</a>
        <a href="{{ route('profil') }}">Profile</a>
        
        @guest
            <a href="{{ route('login') }}" class="login-navbar">Login</a>
            <a href="{{ route('register') }}" class="register-navbar">Register</a>
        @endguest

        @auth
            <a href="{{ route('dashboard') }}" class="login-navbar">Dashboard</a>

            <form method="POST" action="{{ route('logout') }}" class="logout-form">
                @csrf
                <button type="submit" class="logout-navbar">Logout</button>
            </form>
        @endauth
    </div>
</nav>

<main>
    @yield('content')
</main>

</body>
</html>