@extends('layouts.app')

@section('content')

<section class="profile-page">

    {{-- BREADCRUMB --}}
    <div class="breadcrumb-profile">
        <a href="{{ route('home') }}">Home</a>
        <span>›</span>
        <a href="{{ route('profil') }}">Profile</a>
    </div>

    {{-- HERO PROFILE --}}
    <section class="profile-hero">
        <div class="profile-hero-text">
            <h4>ABOUT WILOVA</h4>
            <h1>
                Pabrik Label Baju yang Membantu Brand Tampil Lebih Profesional
            </h1>
            <p>
                WILOVA hadir sebagai solusi pembuatan label pakaian untuk brand fashion,
                konveksi, UMKM, dan pelaku usaha kreatif yang ingin membangun identitas
                produk secara lebih elegan, rapi, dan berkarakter.
            </p>

            <a href="{{ route('kontak') }}" class="profile-hero-btn">
                Hubungi Kami
            </a>
        </div>

        <div class="profile-hero-image">
            <img src="{{ asset('assets/logo_wilova.png') }}" alt="Profil Wilova">
        </div>
    </section>

    {{-- COMPANY INTRO --}}
    <section class="profile-intro">
        <div class="profile-intro-title">
            <h2>WILOVA</h2>
            <p>Pabrik Label Baju</p>
        </div>

        <div class="profile-intro-text">
            <p>
                WILOVA merupakan penyedia layanan pembuatan label pakaian yang berfokus
                pada kualitas, kerapian, dan identitas visual brand. Kami memahami bahwa
                label bukan hanya pelengkap pada pakaian, tetapi juga bagian penting dari
                branding yang dapat meningkatkan kepercayaan pelanggan terhadap sebuah produk.
            </p>

            <p>
                Dengan desain yang dapat disesuaikan, bahan yang nyaman digunakan, serta
                proses produksi yang teliti, WILOVA membantu setiap brand menciptakan label
                yang sesuai dengan karakter dan kebutuhan produknya.
            </p>
        </div>
    </section>

    {{-- VISI MISI --}}
    <section class="vision-mission-section">
        <div class="vision-card">
            <h3>Visi</h3>
            <p>
                Menjadi pabrik label baju terpercaya yang mampu membantu berbagai brand
                fashion menghadirkan identitas produk yang elegan, berkualitas, dan
                memiliki nilai profesional.
            </p>
        </div>

        <div class="vision-card">
            <h3>Misi</h3>
            <ul>
                <li>Menyediakan label pakaian dengan kualitas bahan yang baik dan tahan lama.</li>
                <li>Menghasilkan desain label yang rapi, modern, dan sesuai identitas brand.</li>
                <li>Memberikan pelayanan yang responsif, ramah, dan mudah dipahami pelanggan.</li>
                <li>Mendukung UMKM dan brand fashion agar tampil lebih profesional.</li>
            </ul>
        </div>
    </section>

    {{-- WHY CHOOSE US --}}
    <section class="why-profile-section">
        <div class="profile-section-heading">
            <h2>Why Choose Wilova?</h2>
            <p>Kami mengutamakan detail, kualitas, dan kepercayaan pelanggan.</p>
        </div>

        <div class="why-profile-grid">
            <div class="why-profile-card">
                <div class="why-icon">✦</div>
                <h3>Desain Elegan</h3>
                <p>
                    Label dibuat dengan tampilan bersih, modern, dan mudah disesuaikan
                    dengan karakter brand.
                </p>
            </div>

            <div class="why-profile-card">
                <div class="why-icon">✓</div>
                <h3>Kualitas Rapi</h3>
                <p>
                    Setiap detail label diperhatikan agar hasil akhir terlihat profesional,
                    kuat, dan nyaman digunakan.
                </p>
            </div>

            <div class="why-profile-card">
                <div class="why-icon">♡</div>
                <h3>Custom Sesuai Brand</h3>
                <p>
                    Pelanggan dapat menyesuaikan desain, ukuran, warna, dan kebutuhan label
                    sesuai identitas produknya.
                </p>
            </div>

            <div class="why-profile-card">
                <div class="why-icon">↗</div>
                <h3>Mendukung UMKM</h3>
                <p>
                    Kami membantu usaha fashion kecil maupun besar agar memiliki tampilan
                    produk yang lebih bernilai.
                </p>
            </div>
        </div>
    </section>

    {{-- PROCESS --}}
    <section class="profile-process-section">
        <div class="profile-section-heading">
            <h2>Our Work Process</h2>
            <p>Proses sederhana agar pesanan label kamu lebih mudah dan jelas.</p>
        </div>

        <div class="profile-process-grid">
            <div class="process-card">
                <span>01</span>
                <h3>Konsultasi Desain</h3>
                <p>
                    Pelanggan mengirimkan kebutuhan label, referensi desain, ukuran,
                    warna, dan jumlah pesanan.
                </p>
            </div>

            <div class="process-card">
                <span>02</span>
                <h3>Penyesuaian Konsep</h3>
                <p>
                    Tim menyesuaikan konsep label agar sesuai dengan karakter brand
                    dan kebutuhan produk.
                </p>
            </div>

            <div class="process-card">
                <span>03</span>
                <h3>Produksi Label</h3>
                <p>
                    Label diproduksi dengan memperhatikan bahan, detail cetak, kerapian,
                    dan kualitas akhir.
                </p>
            </div>

            <div class="process-card">
                <span>04</span>
                <h3>Pengiriman</h3>
                <p>
                    Pesanan dikemas dengan aman dan dikirimkan kepada pelanggan sesuai
                    alamat tujuan.
                </p>
            </div>
        </div>
    </section>

    {{-- CLOSING BANNER --}}
    <section class="profile-closing-banner">
        <h2>Let Your Brand Speak Through Every Detail</h2>
        <p>
            Bersama WILOVA, setiap label bukan hanya tanda produk, tetapi juga bagian dari cerita brand kamu.
        </p>
    </section>

    {{-- FOOTER --}}
    <footer class="home-footer profile-footer">
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