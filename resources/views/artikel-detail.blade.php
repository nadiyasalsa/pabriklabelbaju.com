@extends('layouts.app')

@section('content')
<section class="artikel-detail-wrapper">

    <div class="artikel-detail-container">

        <div class="artikel-breadcrumb">
            <a href="{{ route('home') }}">Home</a>
            <span>›</span>
            <a href="{{ route('artikel') }}">Article</a>
            <span>›</span>
            <p>Cara mengembangkan jasa konveksi</p>
        </div>

        <span class="artikel-label">PANDUAN</span>

        <div class="artikel-header">
            <h1>Panduan Lengkap Memilih Bahan Label Baju untuk Usaha Konveksi dan Garmen</h1>

            <div class="artikel-meta">
                <span>📅 4 Juni 2024</span>
                <span>⏱ 8 menit baca</span>
                <span>👤 magna printing</span>
            </div>
        </div>

        <div class="artikel-card">
            <div class="artikel-image">
                <img src="{{ asset('assets/label-baju.jpg') }}" alt="Label Baju">
            </div>

            <div class="artikel-intro">
                <p>
                    Dalam industri konveksi dan garmen, label baju bukan hanya sekadar pelengkap.
                    Label merupakan identitas, penanda ukuran, petunjuk perawatan, bahkan bagian
                    dari strategi branding sebuah produk.
                </p>

                <p>
                    Namun, sering kali pemilik usaha bingung memilih jenis bahan label baju yang
                    paling sesuai dengan karakter produk dan kebutuhan produksi.
                </p>

                <div class="artikel-note">
                    <span>💡</span>
                    <p>
                        Agar Anda tidak salah pilih, berikut adalah panduan lengkap memilih bahan
                        label baju untuk usaha konveksi dan garmen Anda.
                    </p>
                </div>
            </div>
        </div>

        <div class="artikel-content">
            <h2>Mengapa Memilih Bahan Label yang Tepat Itu Penting?</h2>

            <div class="artikel-point-list">
                <div class="artikel-point">
                    <span>✓</span>
                    <p>
                        Dalam industri konveksi dan garmen, label baju bukan hanya sekadar
                        pelengkap. Label merupakan identitas, penanda ukuran, petunjuk perawatan,
                        bahkan bagian dari strategi branding sebuah produk.
                    </p>
                </div>

                <div class="artikel-point">
                    <span>✓</span>
                    <p>
                        Pemilihan bahan label yang tepat akan membuat produk terlihat lebih
                        profesional, nyaman digunakan, serta tahan lama saat dipakai maupun dicuci.
                    </p>
                </div>
            </div>

            <div class="artikel-highlight">
                <span>🎯</span>
                <p>
                    Label yang baik juga dapat membantu pelanggan mengenali merek dengan lebih
                    mudah. Oleh karena itu, pemilik usaha perlu memilih bahan label sesuai jenis
                    pakaian, target pasar, dan konsep brand yang ingin dibangun.
                </p>
            </div>
        </div>

    </div>

</section>
@endsection