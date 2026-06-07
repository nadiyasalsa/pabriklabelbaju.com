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
    <div class="product-category" id="productFilter">
        <button type="button" class="active" data-filter="all">All Product</button>
        <button type="button" data-filter="label-brand">Label Brand</button>
        <button type="button" data-filter="name-tag">Name Tag</button>
        <button type="button" data-filter="label-care">Label Care</button>
    </div>

    {{-- PRODUCT GRID --}}
    <div class="product-grid-page">

        <div class="product-item-page">
            <img src="{{ asset('assets/products/name_tag1.png') }}" alt="Name Tag">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page" data-category="name-tag">
            <img src="{{ asset('assets/products/name_tag2.png') }}" alt="Name Tag">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page" data-category="name-tag">
            <img src="{{ asset('assets/products/name_tag3.png') }}" alt="Hijab Tag">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page" data-category="label-brand">
            <img src="{{ asset('assets/products/name_tag4.png') }}" alt="Custom Name">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page" data-category="label-care">
            <img src="{{ asset('assets/products/size_label1.png') }}" alt="Label Care">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('assets/products/size_label2.png') }}" alt="Size Label">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('assets/products/size_label3.png') }}" alt="Hang Tag">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('assets/products/size_label4.png') }}" alt="Paper Tag">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('assets/products/size_tag1.png') }}" alt="Brand Label">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('assets/products/size_tag2.png') }}" alt="Leather Tag">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('assets/products/size_tag3.png') }}" alt="Size Tag">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('assets/products/size_tag4.png') }}" alt="Hang Tag">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('assets/products/size_tag1.png') }}" alt="Label Care">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('assets/products/size_tag2.png') }}" alt="Size Label">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('assets/products/size_tag3.png') }}" alt="Hang Tag">
            <div class="product-info">
                <h4>Name tag</h4>
                <p>
                    Name tag premium warna gold dengan desain elegan dan minimalis.
                    Bisa custom logo, nama, dan jabatan.
                </p>
            </div>
        </div>

        <div class="product-item-page">
            <img src="{{ asset('assets/products/size_tag4.png') }}" alt="Paper Tag">
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
            <img src="{{ asset('assets/products/hang_tag.png') }}" alt="Wilova Hang Tag">
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