@extends('layouts.app')

@section('content')

<section class="contact-clean-page">

    {{-- BREADCRUMB --}}
    <div class="contact-clean-breadcrumb">
        <a href="{{ url('/') }}">Home</a>
        <span>›</span>
        <a href="{{ url('/kontak') }}">Contact</a>
    </div>

    {{-- HEADER --}}
    <div class="contact-clean-header">
        <h1>Kontak Kami</h1>
        <p>
            Kami siap membantu kebutuhan label baju, name tag, label care,
            dan kebutuhan branding produk fashion kamu.
        </p>
    </div>

    {{-- CONTACT MAIN --}}
    <div class="contact-clean-container">

        <div class="contact-clean-card">

            <div class="contact-clean-left">
                <span class="contact-badge">WILOVA LABEL</span>

                <h2>Hubungi Wilova</h2>

                <p>
                    Punya pertanyaan seputar produk, pemesanan, desain custom,
                    estimasi harga, atau proses produksi? Kamu bisa langsung
                    menghubungi kami melalui kontak berikut.
                </p>

                <a href="https://wa.me/6282583020737?text=Halo%20Wilova,%20saya%20ingin%20bertanya%20tentang%20produk%20label%20baju."
                   target="_blank"
                   class="contact-main-button">
                    Hubungi via WhatsApp
                </a>
            </div>

            <div class="contact-clean-right">

                <div class="contact-mini-card">
                    <div class="contact-mini-icon">📍</div>
                    <div>
                        <h4>Alamat</h4>
                        <p>Yogyakarta, Jawa Tengah</p>
                    </div>
                </div>

                <div class="contact-mini-card">
                    <div class="contact-mini-icon">📞</div>
                    <div>
                        <h4>WhatsApp</h4>
                        <p>085175389735</p>
                    </div>
                </div>

                <div class="contact-mini-card">
                    <div class="contact-mini-icon">✉️</div>
                    <div>
                        <h4>Email</h4>
                        <p>wilovalabel@gmail.com</p>
                    </div>
                </div>

                <div class="contact-mini-card">
                    <div class="contact-mini-icon">📷</div>
                    <div>
                        <h4>Instagram</h4>
                        <p>@wilovalabel</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

    {{-- INFO SECTION --}}
    <div class="contact-note-section">
        <div class="contact-note-card">
            <div>
                <h3>Butuh label custom untuk brand kamu?</h3>
                <p>
                    Wilova melayani pembuatan label brand, name tag, label care,
                    hang tag, dan berbagai kebutuhan identitas produk fashion
                    dengan desain yang dapat disesuaikan.
                </p>
            </div>

            <div class="contact-hours">
                <h4>Jam Operasional</h4>
                <p>Senin - Sabtu</p>
                <p>09.00 - 17.00 WIB</p>
            </div>
        </div>
    </div>

        {{-- FOOTER --}}
    {{-- COMPACT FOOTER --}}
    <footer class="contact-footer-modern">
        <div class="contact-footer-modern-inner">

            <div class="contact-footer-brand-box">
                <h2>WILOVA</h2>
                <p>Pabrik Label Baju</p>
            </div>

            <div class="contact-footer-copy">
                <h4>Label Custom untuk Brand Fashion</h4>
                <p>
                    Membantu produk fashion tampil lebih rapi, profesional, dan mudah
                    dikenali melalui label brand, name tag, label care, dan hang tag custom.
                </p>
            </div>

            <div class="contact-footer-service-box">
                <h4>Layanan Kami</h4>

                <div class="contact-footer-tags">
                    <span>Label Brand</span>
                    <span>Name Tag</span>
                    <span>Label Care</span>
                    <span>Hang Tag</span>
                </div>
            </div>

        </div>

        <div class="contact-footer-line"></div>

        <div class="contact-footer-bottom-modern">
            <p>© 2026 Wilova. All rights reserved.</p>
        </div>
    </footer>
    
</section>

@endsection