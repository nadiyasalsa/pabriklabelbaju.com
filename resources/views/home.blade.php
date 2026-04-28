@extends('layouts.app')

@section('title', 'Home - Wilova Pabrik Label Baju')

@section('content')

<section class="hero-article-section">
    <div class="container hero-article-grid">

        <div class="hero-image-card">
            <img src="{{ asset('images/hero-konveksi.jpg') }}" alt="Mesin Konveksi">
        </div>

        <div class="article-card">
            <div class="article-card-header">
                <h2>ARTICLE</h2>
                <a href="{{ url('/artikel') }}">See More</a>
            </div>

            <div class="article-list">
                <div class="article-item">
                    <span>&gt;</span>
                    <div>
                        <h4>Cara mengembangkan jasa konveksi</h4>
                        <a href="{{ url('/artikel/cara-mengembangkan-jasa-konveksi') }}">Read</a>
                    </div>
                </div>

                <div class="article-item">
                    <span>&gt;</span>
                    <div>
                        <h4>Sistem gaji kerja konveksi</h4>
                        <a href="#">Read</a>
                    </div>
                </div>

                <div class="article-item">
                    <span>&gt;</span>
                    <div>
                        <h4>Standar ukuran baju anak</h4>
                        <a href="#">Read</a>
                    </div>
                </div>

                <div class="article-item">
                    <span>&gt;</span>
                    <div>
                        <h4>Warna yang cocok untuk baju</h4>
                        <a href="#">Read</a>
                    </div>
                </div>

                <div class="article-item">
                    <span>&gt;</span>
                    <div>
                        <h4>Cara mempromosikan usaha konveksi</h4>
                        <a href="#">Read</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="brand-quote-section">
    <div class="container brand-quote-content">
        <img src="{{ asset('images/logo-wilova.png') }}" alt="Wilova Logo">

        <p>
            “Mengukir identitas merekmu melalui label pakaian<br>
            berkualitas tinggi yang mencerminkan profesionalitas dan karakter brand.”
        </p>
    </div>
</section>

<section class="product-section">
    <div class="container">

        <div class="section-top">
            <h2>OUR PRODUCT</h2>
            <a href="{{ url('/produk') }}">See More</a>
        </div>

        <div class="product-scroll">
            <div class="product-box">
                <img src="{{ asset('images/product-brand-label.jpg') }}" alt="Brand Label">
                <div class="product-name">Brand Label</div>
            </div>

            <div class="product-box">
                <img src="{{ asset('images/product-name-tag.jpg') }}" alt="Name Tag">
                <div class="product-name">Name Tag</div>
            </div>

            <div class="product-box">
                <img src="{{ asset('images/product-size-label.jpg') }}" alt="Size Label">
                <div class="product-name">Size Label</div>
            </div>

            <div class="product-box">
                <img src="{{ asset('images/product-hijab-tag.jpg') }}" alt="Hijab Tag">
                <div class="product-name">Hijab Tag</div>
            </div>
        </div>

    </div>
</section>

<section class="testimonial-section">
    <div class="container testimonial-grid">

        <div class="testimonial-product-preview">
            <img src="{{ asset('images/testimonial-label.jpg') }}" alt="Label Preview">

            <div class="preview-dots">
                <span class="active"></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="testimonial-content">
            <h2>
                Don’t Just Take Our Word for It<br>
                — Hear from Our Clients
            </h2>

            <div class="client-card">
                <div class="client-header">
                    <img src="{{ asset('images/client-keyrna.jpg') }}" alt="Client Photo">

                    <div>
                        <h4>Keyrna Miska</h4>
                        <p>★★★★★</p>
                    </div>
                </div>

                <div class="client-body">
                    <p>
                        Kualitas label yang dihasilkan rapi, detail, dan sesuai dengan
                        desain yang kami inginkan. Proses produksi juga cepat dan tepat
                        waktu, sehingga sangat membantu kebutuhan brand kami.
                        Sangat direkomendasikan untuk pelaku usaha fashion.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="wilova-footer">
    <div class="container footer-grid">

        <div class="footer-about">
            <h2>WILOVA</h2>
            <h4>Pabrik Label Baju</h4>
            <p>
                Hadir untuk membantu mewujudkan identitas brand yang kuat melalui label
                pakaian yang tidak hanya tahan lama, tetapi juga mampu mencerminkan
                nilai visual dan citra yang ingin disampaikan. Setiap detail kami kerjakan
                dengan teliti agar produk fashion terlihat lebih profesional.
            </p>
        </div>

        <div class="footer-contact">
            <h4>Contact us</h4>
            <ul>
                <li>@wilovalabel</li>
                <li>0852362037237</li>
                <li>wilova@gmail.com</li>
            </ul>
        </div>

        <div class="footer-feedback">
            <h4>Feedback & Suggestions</h4>
            <p>
                Kami sangat menghargai setiap feedback dan saran dari Anda. Masukan
                yang diberikan membantu kami untuk meningkatkan kualitas produk dan
                pelayanan, sehingga kebutuhan pelanggan dapat terpenuhi dengan lebih baik.
            </p>
        </div>

    </div>

    <div class="container footer-credit">
        <p>Design by sektoransih</p>
    </div>
</section>

@endsection