@extends('layouts.app')

@section('title', 'Article - Wilova')

@section('content')

<section class="article-list-page">
    <div class="container">

        <div class="article-list-title">
            <h1>Article</h1>
            <p>Kumpulan artikel seputar label baju, konveksi, dan branding fashion.</p>
        </div>

        <div class="article-card-grid">

            <div class="article-page-card">
                <img src="{{ asset('images/article-label.jpg') }}" alt="Article">
                <div class="article-page-card-content">
                    <h3>Cara mengembangkan jasa konveksi</h3>
                    <p>
                        Panduan lengkap memilih bahan label baju untuk usaha konveksi
                        dan garmen agar brand terlihat lebih profesional.
                    </p>
                    <a href="{{ url('/artikel/cara-mengembangkan-jasa-konveksi') }}">
                        Read More
                    </a>
                </div>
            </div>

            <div class="article-page-card">
                <img src="{{ asset('images/article-2.jpg') }}" alt="Article">
                <div class="article-page-card-content">
                    <h3>Sistem gaji kerja konveksi</h3>
                    <p>
                        Pembahasan singkat mengenai sistem kerja dan pengelolaan tenaga
                        produksi dalam bisnis konveksi.
                    </p>
                    <a href="#">Read More</a>
                </div>
            </div>

            <div class="article-page-card">
                <img src="{{ asset('images/article-3.jpg') }}" alt="Article">
                <div class="article-page-card-content">
                    <h3>Standar ukuran baju anak</h3>
                    <p>
                        Informasi dasar mengenai ukuran pakaian anak yang sering
                        digunakan pada produksi baju.
                    </p>
                    <a href="#">Read More</a>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection