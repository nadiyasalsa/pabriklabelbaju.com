<header class="site-navbar">
    <div class="container navbar-inner">

        <a href="{{ url('/') }}" class="navbar-logo">
            <img src="{{ asset('images/logo-wilova.png') }}" alt="Wilova Logo">
        </a>

        <nav class="navbar-menu">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/produk') }}">Product</a>
            <a href="{{ url('/testimonial') }}">Testimoni</a>
            <a href="{{ url('/artikel') }}">Article</a>
            <a href="{{ url('/profil') }}">Profile</a>
            <a href="{{ url('/login') }}" class="login-menu">Login</a>
        </nav>

    </div>
</header>