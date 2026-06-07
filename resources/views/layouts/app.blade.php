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
            <img src="{{ asset('assets/logo_wilova.png') }}" alt="Wilova Logo">
        </a>
    </div>
    
    <div class="navbar-menu">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('produk') }}">Product</a>
        <a href="{{ route('testimonial') }}">Testimoni</a>
        <a href="{{ route('artikel') }}">Article</a>
        <a href="{{ route('profil') }}">Profile</a>
    </div>
</nav>

<main>
    @yield('content')
</main>

<script src="{{ asset('js/site-interactions.js') }}"></script>

</body>
</html>