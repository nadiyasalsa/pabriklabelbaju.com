@extends('layouts.app')

@section('content')

<section class="article-page">

    {{-- BREADCRUMB --}}
    <div class="breadcrumb-article">
        <a href="{{ route('home') }}">Home</a>
        <span>›</span>
        <a href="{{ route('artikel') }}">Article</a>
    </div>

    {{-- TITLE --}}
    <div class="article-page-title">
        <h1>
            Setiap artikel dirancang <strong>untuk memberi nilai,</strong> <br>
            <strong>bukan sekadar informasi.</strong>
        </h1>
    </div>

    {{-- ARTICLE GRID --}}
    <div class="article-grid-page">

        <div class="article-card-page">
            <img src="{{ asset('assets/articles/article1.png') }}" alt="Artikel Label Baju">
            <div class="article-card-text">
                <h3>
                    Panduan Lengkap Memilih Bahan Label Baju untuk Usaha Konveksi dan Garmen
                </h3>
                <p>- magna printing</p>
            </div>
        </div>

        <div class="article-card-page">
            <img src="{{ asset('assets/articles/article2.png') }}" alt="Artikel Label Baju">
            <div class="article-card-text">
                <h3>
                    Panduan Lengkap Memilih Bahan Label Baju untuk Usaha Konveksi dan Garmen
                </h3>
                <p>- magna printing</p>
            </div>
        </div>

        <div class="article-card-page">
            <img src="{{ asset('assets/articles/article3.png') }}" alt="Artikel Label Baju">
            <div class="article-card-text">
                <h3>
                    Panduan Lengkap Memilih Bahan Label Baju untuk Usaha Konveksi dan Garmen
                </h3>
                <p>- magna printing</p>
            </div>
        </div>

        <div class="article-card-page">
            <img src="{{ asset('assets/articles/article5.png') }}" alt="Artikel Label Baju">
            <div class="article-card-text">
                <h3>
                    Panduan Lengkap Memilih Bahan Label Baju untuk Usaha Konveksi dan Garmen
                </h3>
                <p>- magna printing</p>
            </div>
        </div>

        <div class="article-card-page">
            <img src="{{ asset('assets/articles/article6.png') }}" alt="Artikel Label Baju">
            <div class="article-card-text">
                <h3>
                    Panduan Lengkap Memilih Bahan Label Baju untuk Usaha Konveksi dan Garmen
                </h3>
                <p>- magna printing</p>
            </div>
        </div>

        <div class="article-card-page">
            <img src="{{ asset('assets/articles/article7.png') }}" alt="Artikel Label Baju">
            <div class="article-card-text">
                <h3>
                    Panduan Lengkap Memilih Bahan Label Baju untuk Usaha Konveksi dan Garmen
                </h3>
                <p>- magna printing</p>
            </div>
        </div>

        <div class="article-card-page">
            <img src="{{ asset('assets/articles/article8.png') }}" alt="Artikel Label Baju">
            <div class="article-card-text">
                <h3>
                    Panduan Lengkap Memilih Bahan Label Baju untuk Usaha Konveksi dan Garmen
                </h3>
                <p>- magna printing</p>
            </div>
        </div>

        <div class="article-card-page">
            <img src="{{ asset('assets/articles/article1.png') }}" alt="Artikel Label Baju">
            <div class="article-card-text">
                <h3>
                    Panduan Lengkap Memilih Bahan Label Baju untuk Usaha Konveksi dan Garmen
                </h3>
                <p>- magna printing</p>
            </div>
        </div>

        <div class="article-card-page">
            <img src="{{ asset('assets/articles/article3.png') }}" alt="Artikel Label Baju">
            <div class="article-card-text">
                <h3>
                    Panduan Lengkap Memilih Bahan Label Baju untuk Usaha Konveksi dan Garmen
                </h3>
                <p>- magna printing</p>
            </div>
        </div>

        <div class="article-card-page">
            <img src="{{ asset('assets/articles/article1.png') }}" alt="Artikel Label Baju">
            <div class="article-card-text">
                <h3>
                    Panduan Lengkap Memilih Bahan Label Baju untuk Usaha Konveksi dan Garmen
                </h3>
                <p>- magna printing</p>
            </div>
        </div>

        <div class="article-card-page">
            <img src="{{ asset('assets/articles/article5.png') }}" alt="Artikel Label Baju">
            <div class="article-card-text">
                <h3>
                    Panduan Lengkap Memilih Bahan Label Baju untuk Usaha Konveksi dan Garmen
                </h3>
                <p>- magna printing</p>
            </div>
        </div>

        <div class="article-card-page">
            <img src="{{ asset('assets/articles/article2.png') }}" alt="Artikel Label Baju">
            <div class="article-card-text">
                <h3>
                    Panduan Lengkap Memilih Bahan Label Baju untuk Usaha Konveksi dan Garmen
                </h3>
                <p>- magna printing</p>
            </div>
        </div>

    </div>

    {{-- FOOTER --}}
    <footer class="home-footer article-footer">
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