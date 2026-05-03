@extends('layouts.app')

@section('content')

<section class="product-page">

    {{-- BREADCRUMB --}}
    <div class="breadcrumb-product">
        <a href="{{ route('home') }}">Home</a>
        <span>›</span>
        <a href="{{ route('produk') }}">Product</a>
    </div>

    {{-- TITLE --}}
    <div class="product-page-title">
        <h3>OUR PRODUCT</h3>
        <h1>Crafted for Elegance</h1>
    </div>

    {{-- CATEGORY BUTTON --}}
    <div class="product-category">
        <button>All Product</button>
        <button>Label Brand</button>
        <button>Name Tag</button>
        <button>Label Care</button>
    </div>

    {{-- PRODUCT GRID --}}
    <div class="product-grid-page">

        <div class="product-item-page">
            <img src="{{ asset('images/product-page-1.jpg') }}" alt="Name Tag">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('images/product-page-2.jpg') }}" alt="Name Tag">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('images/product-page-3.jpg') }}" alt="Hijab Tag">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('images/product-page-4.jpg') }}" alt="Custom Name">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('images/product-page-5.jpg') }}" alt="Label Care">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('images/product-page-6.jpg') }}" alt="Size Label">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('images/product-page-7.jpg') }}" alt="Hang Tag">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('images/product-page-8.jpg') }}" alt="Paper Tag">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('images/product-page-9.jpg') }}" alt="Brand Label">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('images/product-page-10.jpg') }}" alt="Leather Tag">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('images/product-page-11.jpg') }}" alt="Size Tag">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('images/product-page-12.jpg') }}" alt="Hang Tag">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('images/product-page-5.jpg') }}" alt="Label Care">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('images/product-page-6.jpg') }}" alt="Size Label">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('images/product-page-7.jpg') }}" alt="Hang Tag">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('images/product-page-8.jpg') }}" alt="Paper Tag">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

    </div>

    {{-- BANNER --}}
    <div class="product-banner">
        <div class="banner-image">
            <img src="{{ asset('images/product-banner.png') }}" alt="Wilova Hang Tag">
        </div>

        <div class="banner-text">
            <p>
                Premium clothing labels with clean, modern designs <br>
                to elevate your brand identity.
            </p>
        </div>
    </div>

    {{-- FOOTER --}}
    <footer class="home-footer product-footer">
        <div class="footer-column footer-brand">
            <h2>WILOVA</h2>
            <h4>Pabrik Label Baju</h4>

            <p>
                hadir untuk membantu mewujudkan identitas brand yang kuat melalui
                label pakaian yang tidak hanya tahan lama, tetapi juga mampu meningkatkan
                nilai visual dan daya tarik produk di mata pelanggan.
                Setiap detail kami kerjakan dengan teliti, mulai dari pemilihan bahan
                hingga hasil akhir yang siap memperkuat citra brand kamu di pasar.
            </p>

            <small>Design by @oktarrinshh</small>
        </div>

        <div class="footer-column footer-contact">
            <h4>Contact us</h4>
            <p>📷 wilovalabel</p>
            <p>📞 082583020737</p>
            <p>✉️ wilovalabel@mail.com</p>
        </div>

        <div class="footer-column footer-feedback">
            <h4>Feedback & Suggestions</h4>

            <p>
                Kami sangat menghargai setiap feedback dan saran dari Anda.
                Masukan yang diberikan membantu kami terus meningkatkan kualitas
                produk dan pelayanan. Jangan ragu untuk berbagi pengalaman atau ide Anda
                agar kami dapat memberikan layanan yang lebih baik ke depannya.
            </p>
        </div>
    </footer>

</section>

@endsection