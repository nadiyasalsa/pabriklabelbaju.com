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

        <div class="article-list">
            <div class="article-item">
                <span>&gt;</span>
                <div>
                    <h4>Cara mengembangkan jasa konveksi</h4>
                    <button>Read</button>
                </div>
            </div>

            <div class="article-item">
                <span>&gt;</span>
                <div>
                    <h4>Sistem gaji kerja konveksi</h4>
                    <button>Read</button>
                </div>
            </div>

            <div class="article-item">
                <span>&gt;</span>
                <div>
                    <h4>Standar ukuran baju anak</h4>
                    <button>Read</button>
                </div>
            </div>

            <div class="article-item">
                <span>&gt;</span>
                <div>
                    <h4>Warna yang cocok untuk baju</h4>
                    <button>Read</button>
                </div>
            </div>

            <div class="article-item">
                <span>&gt;</span>
                <div>
                    <h4>Cara mempromosikan usaha konveksi</h4>
                    <button>Read</button>
                </div>
            </div>
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
        <a href="{{ route('produk') }}">See More</a>
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
<footer class="home-footer">
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

@endsection