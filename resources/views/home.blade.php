@extends('layouts.app')

@section('content')

{{-- SECTION 1: HERO + ARTICLE --}}
<section class="hero-article-section">
    <div class="hero-left">
        <img src="{{ asset('assets/homepage/home_page(retail).png') }}" alt="Hero Image">
    </div>

    <div class="article-box">
        <div class="article-title">
            <h2>ARTICLE</h2>
            <a href="{{ route('artikel') }}">See More</a>
        </div>

        @php
            $homeArticles = [
                [
                    'title' => 'Cara Mengembangkan Jasa Konveksi',
                    'slug' => 'cara-mengembangkan-jasa-konveksi',
                ],
                [
                    'title' => 'Sistem Gaji Kerja Konveksi',
                    'slug' => 'sistem-gaji-kerja-konveksi',
                ],
                [
                    'title' => 'Standar Ukuran Baju Anak',
                    'slug' => 'standar-ukuran-baju-anak',
                ],
                [
                    'title' => 'Warna yang Cocok untuk Baju',
                    'slug' => 'warna-yang-cocok-untuk-baju',
                ],
                [
                    'title' => 'Baju Konveksi Solusi Produksi Massal!',
                    'slug' => 'baju-konveksi-solusi-produksi-massal',
                ],
            ];
        @endphp

        <div class="article-list">
            @foreach ($homeArticles as $article)
                <div class="article-item">
                    <span>&gt;</span>

                    <div>
                        <h4>{{ $article['title'] }}</h4>

                        <a href="{{ route('artikel.detail', ['slug' => $article['slug']]) }}"
                           class="read-button">
                            Read
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- SECTION 2: QUOTE --}}
<section class="quote-section">
    <img src="{{ asset('assets/logo_wilova.png') }}" alt="Wilova Logo">

    <p>
        “Mengukir identitas merekmu melalui label pakaian <br>
        berkualitas tinggi yang mencerminkan profesionalitas dan karakter brand.”
    </p>
</section>

{{-- SECTION 3: PRODUCT --}}
<section class="product-section">
    <div class="section-header">
        <h2>OUR PRODUCT</h2>
        <a href="{{ route('produk') }}" class="product-see-more-btn">See More</a>
    </div>

    <div class="product-list">
        <div class="product-card">
            <img src="{{ asset('assets/homepage/brand_label.png') }}" alt="Brand Label">
            <div class="product-name">Brand Label</div>
        </div>

        <div class="product-card">
            <img src="{{ asset('assets/homepage/name_tag.png') }}" alt="Name Tag">
            <div class="product-name">Name Tag</div>
        </div>

        <div class="product-card">
            <img src="{{ asset('assets/homepage/size_label.png') }}" alt="Size Label">
            <div class="product-name">Size Label</div>
        </div>

        <div class="product-card">
            <img src="{{ asset('assets/homepage/hijab_tag.png') }}" alt="Hijab Tag">
            <div class="product-name">Hijab Tag</div>
        </div>
    </div>
</section>

{{-- SECTION 4: TESTIMONIAL --}}
<section class="client-section">
    <div class="client-image">
        <img src="{{ asset('assets/homepage/image_testi.png') }}" alt="Label kain">

        <div class="client-dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div class="client-content">
        <h2>
            Don’t Just Take Our Word for It <br>
            — Hear from Our Clients
        </h2>

        <div class="client-card">
            <div class="client-card-header">
                <img src="{{ asset('assets/homepage/user_testi.png') }}" alt="Keyrna Miska">

                <div>
                    <h3>Keyrna Miska</h3>
                    <p>★★★★★</p>
                </div>
            </div>

            <div class="client-card-body">
                <p>
                    Kualitas label yang dihasilkan rapi, detail, dan sesuai dengan desain yang kami inginkan.
                    Proses produksi juga cepat dan tepat waktu, sehingga sangat membantu kebutuhan brand kami.
                    Sangat direkomendasikan untuk pelaku usaha fashion.
                </p>
            </div>
        </div>
    </div>
</section>

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