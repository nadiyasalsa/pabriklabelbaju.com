@extends('layouts.app')

@section('content')

<section class="testimoni-page">

    {{-- BREADCRUMB --}}
    <div class="breadcrumb-testimoni">
        <a href="{{ route('home') }}">Home</a>
        <span>›</span>
        <a href="{{ route('testimonial') }}">Testimoni</a>
    </div>

    {{-- TITLE --}}
    <div class="testimoni-title-wrap">
        <div class="title-line"></div>

        <div class="testimoni-title">
            <h1>From Our Customers <br> With Love</h1>
            <p>Loved by over 1,000+ customers</p>
        </div>

        <div class="title-line"></div>
    </div>

    {{-- TOP TESTIMONI --}}
    <div class="top-testimoni">
        <div class="mini-review-card">
            <div class="review-text-box small-box">
                <p>oke</p>
            </div>

            <div class="review-user">
                <img src="{{ asset('assets/testimonials/client_testi1.png') }}" alt="Dine Oktaf">
                <div>
                    <h4>Dine Oktaf</h4>
                    <p>Owner Hijab Aleya</p>
                </div>
            </div>
        </div>

        <div class="main-review-card">
            <div class="review-text-box big-box">
                <p>
                    “Kualitas labelnya sangat rapi dan premium,
                    benar-benar meningkatkan tampilan brand kami—
                    pelayanan cepat dan hasilnya sesuai ekspektasi.”
                </p>
            </div>

            <div class="review-user main-user">
                <img src="{{ asset('assets/testimonials/client_testi2.png') }}" alt="Nakeya Jessica">
                <div>
                    <h4>Nakeya Jessica</h4>
                    <p>Owner Zara</p>
                </div>
            </div>
        </div>

        <div class="mini-review-card">
            <div class="review-text-box small-box">
                <p>nyaman</p>
            </div>

            <div class="review-user">
                <img src="{{ asset('assets/testimonials/client_testi3.png') }}" alt="Nichole">
                <div>
                    <h4>Nichole</h4>
                    <p>Owner Cole</p>
                </div>
            </div>
        </div>
    </div>

    {{-- STATS --}}
    <div class="testimoni-stats">
        <h3>Empowering Fashion Brands with Willova</h3>

        <div class="stats-list">
            <div class="stats-item">
                <h2><span>★</span>4.8</h2>
                <p>Rating</p>
            </div>

            <div class="stats-item">
                <h2>1500+</h2>
                <p>Brand</p>
            </div>

            <div class="stats-item">
                <h2>25</h2>
                <p>City</p>
            </div>
        </div>
    </div>

    {{-- TESTIMONI GRID --}}
    <div class="review-grid-section">

        <div class="review-grid">
            <div class="review-card">
                <img src="{{ asset('assets/testimonials/client_testi4.png') }}" alt="Customer">
                <div class="review-inner">
                    <p>
                        “Kualitas labelnya sangat rapi dan premium,
                        benar-benar meningkatkan tampilan brand kami—
                        pelayanan cepat dan hasilnya sesuai ekspektasi.”
                    </p>
                </div>
            </div>

            <div class="review-card">
                <img src="{{ asset('assets/testimonials/client_testi5.png') }}" alt="Customer">
                <div class="review-inner">
                    <p>
                        “Kualitas labelnya sangat rapi dan premium,
                        benar-benar meningkatkan tampilan brand kami—
                        pelayanan cepat dan hasilnya sesuai ekspektasi.”
                    </p>
                </div>
            </div>

            <div class="review-card">
                <img src="{{ asset('assets/testimonials/client_testi6.png') }}" alt="Customer">
                <div class="review-inner">
                    <p>
                        “Kualitas labelnya sangat rapi dan premium,
                        benar-benar meningkatkan tampilan brand kami—
                        pelayanan cepat dan hasilnya sesuai ekspektasi.”
                    </p>
                </div>
            </div>
        </div>

        <div class="review-grid middle-grid">
            <div class="review-card">
                <img src="{{ asset('assets/testimonials/client_testi7.png') }}" alt="Customer">
                <div class="review-inner">
                    <p>
                        “Kualitas labelnya sangat rapi dan premium,
                        benar-benar meningkatkan tampilan brand kami—
                        pelayanan cepat dan hasilnya sesuai ekspektasi.”
                    </p>
                </div>
            </div>

            <div class="review-center-title">
                <h2>
                    Don’t Believe Me <br>
                    Check Whats <br>
                    Client Think Of Us
                </h2>
            </div>

            <div class="review-card">
                <img src="{{ asset('assets/testimonials/client_testi8.png') }}" alt="Customer">
                <div class="review-inner">
                    <p>
                        “Kualitas labelnya sangat rapi dan premium,
                        benar-benar meningkatkan tampilan brand kami—
                        pelayanan cepat dan hasilnya sesuai ekspektasi.”
                    </p>
                </div>
            </div>
        </div>

        <div class="review-grid">
            <div class="review-card">
                <img src="{{ asset('assets/testimonials/client_testi9.png') }}" alt="Customer">
                <div class="review-inner">
                    <p>
                        “Kualitas labelnya sangat rapi dan premium,
                        benar-benar meningkatkan tampilan brand kami—
                        pelayanan cepat dan hasilnya sesuai ekspektasi.”
                    </p>
                </div>
            </div>

            <div class="review-card">
                <img src="{{ asset('assets/testimonials/client_testi10.png') }}" alt="Customer">
                <div class="review-inner">
                    <p>
                        “Kualitas labelnya sangat rapi dan premium,
                        benar-benar meningkatkan tampilan brand kami—
                        pelayanan cepat dan hasilnya sesuai ekspektasi.”
                    </p>
                </div>
            </div>

            <div class="review-card">
                <img src="{{ asset('assets/testimonials/client_testi11.png') }}" alt="Customer">
                <div class="review-inner">
                    <p>
                        “Kualitas labelnya sangat rapi dan premium,
                        benar-benar meningkatkan tampilan brand kami—
                        pelayanan cepat dan hasilnya sesuai ekspektasi.”
                    </p>
                </div>
            </div>
        </div>

    </div>

    
    {{-- FOOTER --}}
    <footer class="home-footer-final product-footer-final">
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

                    <a href="mailto:wilovalabel@gmail.com">
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