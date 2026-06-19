@extends('layouts.app')

@section('content')

@php
    $categories = [
        'all' => 'All Product',
        'label-brand' => 'Label Brand',
        'name-tag' => 'Name Tag',
        'label-care' => 'Label Care',
    ];

    $activeCategory = request()->query('kategori', 'all');

    if (! array_key_exists($activeCategory, $categories)) {
        $activeCategory = 'all';
    }

    $products = [
        /*
        |--------------------------------------------------------------------------
        | NAME TAG
        |--------------------------------------------------------------------------
        */

        [
            'category' => 'name-tag',
            'image' => 'assets/products/name_tag1.png',
            'alt' => 'Name Tag Gold',
            'title' => 'Name Tag Gold',
            'description' => 'Name tag premium warna gold dengan desain elegan dan minimalis. Bisa custom logo, nama, dan jabatan.',
        ],
        [
            'category' => 'name-tag',
            'image' => 'assets/products/name_tag2.png',
            'alt' => 'Name Tag Premium',
            'title' => 'Name Tag Premium',
            'description' => 'Name tag premium dengan tampilan rapi, elegan, dan cocok untuk kebutuhan identitas perusahaan.',
        ],
        [
            'category' => 'name-tag',
            'image' => 'assets/products/name_tag3.png',
            'alt' => 'Name Tag Custom',
            'title' => 'Name Tag Custom',
            'description' => 'Name tag custom yang dapat disesuaikan dengan logo, nama, jabatan, dan kebutuhan brand.',
        ],
        [
            'category' => 'name-tag',
            'image' => 'assets/products/name_tag4.png',
            'alt' => 'Name Tag Elegan',
            'title' => 'Name Tag Elegan',
            'description' => 'Name tag elegan untuk seragam kerja, event, komunitas, dan kebutuhan identitas profesional lainnya.',
        ],

        /*
        |--------------------------------------------------------------------------
        | LABEL BRAND
        |--------------------------------------------------------------------------
        */

        [
            'category' => 'label-brand',
            'image' => 'assets/products/size_tag1.png',
            'alt' => 'Label Brand Custom',
            'title' => 'Label Brand Custom',
            'description' => 'Label brand custom untuk memperkuat identitas merek pakaian dengan desain yang dapat disesuaikan.',
        ],
        [
            'category' => 'label-brand',
            'image' => 'assets/products/size_tag2.png',
            'alt' => 'Label Brand Premium',
            'title' => 'Label Brand Premium',
            'description' => 'Label brand premium dengan tampilan elegan, rapi, dan cocok untuk produk fashion profesional.',
        ],
        [
            'category' => 'label-brand',
            'image' => 'assets/products/size_tag3.png',
            'alt' => 'Label Brand Minimalis',
            'title' => 'Label Brand Minimalis',
            'description' => 'Label brand bergaya minimalis untuk menampilkan identitas produk secara sederhana dan modern.',
        ],
        [
            'category' => 'label-brand',
            'image' => 'assets/products/size_tag4.png',
            'alt' => 'Label Brand Elegan',
            'title' => 'Label Brand Elegan',
            'description' => 'Label brand elegan untuk meningkatkan nilai visual dan citra merek pada produk pakaian.',
        ],

        /*
        |--------------------------------------------------------------------------
        | LABEL CARE
        |--------------------------------------------------------------------------
        */

        [
            'category' => 'label-care',
            'image' => 'assets/products/size_label1.png',
            'alt' => 'Label Care',
            'title' => 'Label Care',
            'description' => 'Label care berisi informasi ukuran dan instruksi perawatan pakaian agar produk lebih informatif.',
        ],
        [
            'category' => 'label-care',
            'image' => 'assets/products/size_label2.png',
            'alt' => 'Label Care Size',
            'title' => 'Label Care Size',
            'description' => 'Label ukuran dan perawatan yang membantu pelanggan mengetahui detail produk dengan jelas.',
        ],
        [
            'category' => 'label-care',
            'image' => 'assets/products/size_label3.png',
            'alt' => 'Washing Instruction Label',
            'title' => 'Washing Instruction Label',
            'description' => 'Label instruksi pencucian untuk menjelaskan cara merawat pakaian agar tetap awet.',
        ],
        [
            'category' => 'label-care',
            'image' => 'assets/products/size_label4.png',
            'alt' => 'Label Care Custom',
            'title' => 'Label Care Custom',
            'description' => 'Label care custom yang dapat disesuaikan dengan informasi bahan, ukuran, dan instruksi perawatan produk.',
        ],
    ];

    if ($activeCategory === 'all') {
        $filteredProducts = $products;
    } else {
        $filteredProducts = array_values(array_filter($products, function ($product) use ($activeCategory) {
            return $product['category'] === $activeCategory;
        }));
    }
@endphp

<section class="product-page">

    {{-- BREADCRUMB --}}
    <div class="breadcrumb-product">
        <a href="{{ route('home') }}">Home</a>
        <span>›</span>
        <a href="{{ route('produk') }}">Product</a>

        @if ($activeCategory !== 'all')
            <span>›</span>
            <a href="{{ route('produk', ['kategori' => $activeCategory]) }}">
                {{ $categories[$activeCategory] }}
            </a>
        @endif
    </div>

    {{-- TITLE --}}
    <div class="product-page-title">
        <h3>OUR PRODUCT</h3>
        <h1>Crafted for Elegance</h1>
    </div>

    {{-- CATEGORY BUTTON --}}
    <div class="product-category">
        <a href="{{ route('produk') }}"
           class="{{ $activeCategory === 'all' ? 'active' : '' }}">
            All Product
        </a>

        <a href="{{ route('produk', ['kategori' => 'label-brand']) }}"
           class="{{ $activeCategory === 'label-brand' ? 'active' : '' }}">
            Label Brand
        </a>

        <a href="{{ route('produk', ['kategori' => 'name-tag']) }}"
           class="{{ $activeCategory === 'name-tag' ? 'active' : '' }}">
            Name Tag
        </a>

        <a href="{{ route('produk', ['kategori' => 'label-care']) }}"
           class="{{ $activeCategory === 'label-care' ? 'active' : '' }}">
            Label Care
        </a>
    </div>

    {{-- PRODUCT GRID --}}
    <div class="product-grid-page">

        @foreach ($filteredProducts as $product)
            <div class="product-item-page">
                <img src="{{ asset($product['image']) }}" alt="{{ $product['alt'] }}">

                <div class="product-info">
                    <h4>{{ $product['title'] }}</h4>
                    <p>{{ $product['description'] }}</p>
                </div>
            </div>
        @endforeach

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
    {{-- SECTION 5: FOOTER --}}
{{-- FOOTER --}}
<footer class="home-footer-final">
    <div class="home-footer-final-inner">

        {{-- BRAND --}}
        <div class="home-footer-brand-final">
            <h2>WILOVA</h2>
            <h4>Pabrik Label Baju</h4>

            <p>
                Wilova hadir untuk membantu membangun identitas brand yang kuat
                melalui label pakaian yang rapi, tahan lama, dan bernilai visual.
                Setiap detail kami kerjakan dengan teliti agar produk kamu tampil
                lebih profesional dan mudah dikenali.
            </p>
        </div>

        {{-- CONTACT --}}
        <div class="home-footer-contact-final">
            <h4>Contact Us</h4>

            <div class="home-footer-contact-list">
                <a href="https://www.instagram.com/wilovalabel" target="_blank">
                    <span>📷</span>
                    <p>@wilovalabel</p>
                </a>

                <a href="https://wa.me/6281575389735" target="_blank">
                    <span>📞</span>
                    <p>081575389735</p>
                </a>

                <a href="mailto:wilovalabel@mail.com">
                    <span>✉️</span>
                    <p>wilovalabel@gmail.com</p>
                </a>
            </div>
        </div>

        {{-- FEEDBACK --}}
        <div class="home-footer-feedback-final">
            <h4>Feedback & Suggestions</h4>

            <p>
                Kami sangat menghargai setiap masukan dari pelanggan.
                Feedback kamu membantu Wilova meningkatkan kualitas produk,
                pelayanan, dan pengalaman pemesanan agar hasil yang diberikan
                semakin baik.
            </p>

            <div class="home-footer-badge-list">
                <span>Custom Label</span>
                <span>Fast Response</span>
                <span>Premium Finish</span>
            </div>
        </div>

    </div>

    <div class="home-footer-final-bottom">
        <p>© 2026 Wilova. All rights reserved.</p>
    </div>
</footer>

</section>

@endsection