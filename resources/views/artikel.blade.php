@extends('layouts.app')

@section('content')

@php
    $activeSlug = $slug ?? null;

    $articles = [
        'sistem-gaji-kerja-konveksi' => [
            'slug' => 'sistem-gaji-kerja-konveksi',
            'title' => 'Sistem Gaji Kerja Konveksi',
            'author' => 'pabrik label baju',
            'image' => 'assets/articles/article3.png',
            'excerpt' => 'Mengenal sistem pengupahan kerja konveksi yang umum digunakan dalam industri pakaian.',
            'intro' => [
                'Sistem gaji kerja konveksi adalah metode pengupahan yang digunakan dalam industri konveksi untuk memberikan kompensasi kepada pekerja berdasarkan hasil produksi. Sistem ini dapat berbentuk upah harian, mingguan, borongan, atau berdasarkan jumlah potongan kain yang berhasil diselesaikan.',
            ],
            'top_title' => 'Gaji Konveksi Rumahan',
            'top_content' => [
                'Gaji konveksi rumahan biasanya diberikan kepada penjahit yang bekerja dari rumah. Besaran upah ditentukan berdasarkan jumlah produk yang berhasil dijahit dan tingkat kesulitan pengerjaan.',
                'Rumus sederhana yang sering digunakan adalah jumlah potongan kain dikalikan harga per potongan. Misalnya, jika penjahit menyelesaikan 100 potong dengan harga Rp 3.000 per potong, maka upah yang diterima adalah Rp 300.000.',
            ],
            'sections' => [
                [
                    'title' => 'Faktor yang Memengaruhi Gaji Konveksi',
                    'paragraphs' => [
                        'Besaran gaji dalam pekerjaan konveksi dipengaruhi oleh jenis produk, tingkat kesulitan desain, jumlah pesanan, kecepatan pengerjaan, serta standar kualitas jahitan.',
                        'Semakin rumit model pakaian atau semakin tinggi standar finishing yang diminta, maka upah produksi biasanya juga lebih tinggi.',
                    ],
                ],
            ],
        ],

        'standar-ukuran-baju-anak' => [
            'slug' => 'standar-ukuran-baju-anak',
            'title' => 'Standar Ukuran Baju Anak',
            'author' => 'pabrik label baju',
            'image' => 'assets/articles/article1.png',
            'excerpt' => 'Standar ukuran baju anak membantu produksi pakaian agar lebih nyaman dan sesuai tubuh anak.',
            'intro' => [
                'Standar ukuran baju anak digunakan untuk memastikan pakaian yang diproduksi memiliki ukuran yang sesuai dengan usia dan pertumbuhan tubuh anak. Hal ini penting karena anak-anak memiliki perubahan ukuran tubuh yang cukup cepat.',
            ],
            'top_title' => 'Kategori Ukuran Baju Anak',
            'top_content' => [
                'Ukuran baju anak biasanya dibagi berdasarkan usia, seperti bayi, balita, anak prasekolah, dan anak usia sekolah. Setiap kategori memiliki ukuran panjang badan, lingkar dada, panjang lengan, dan lebar bahu yang berbeda.',
                'Dengan standar ukuran yang jelas, produsen dapat mengurangi risiko pakaian terlalu kecil, terlalu besar, atau tidak nyaman digunakan.',
            ],
            'sections' => [
                [
                    'title' => 'Pentingnya Label Ukuran',
                    'paragraphs' => [
                        'Label ukuran membantu pelanggan memilih produk yang sesuai tanpa harus mencoba pakaian secara langsung.',
                        'Pada produk anak, label ukuran menjadi sangat penting karena konsumen biasanya membeli berdasarkan usia, tinggi badan, atau berat badan anak.',
                    ],
                ],
            ],
        ],

        'cara-mengembangkan-jasa-konveksi' => [
            'slug' => 'cara-mengembangkan-jasa-konveksi',
            'title' => 'Cara Mengembangkan Jasa Konveksi',
            'author' => 'pabrik label baju',
            'image' => 'assets/articles/article2.png',
            'excerpt' => 'Strategi mengembangkan jasa konveksi agar lebih dikenal dan dipercaya pelanggan.',
            'intro' => [
                'Mengembangkan jasa konveksi membutuhkan strategi yang tepat, mulai dari peningkatan kualitas produksi, pengelolaan pesanan, pelayanan pelanggan, hingga penguatan identitas brand.',
            ],
            'top_title' => 'Modal Usaha Konveksi',
            'top_content' => [
                'Modal usaha konveksi tidak hanya berupa mesin jahit dan bahan kain, tetapi juga mencakup tenaga kerja, sistem produksi, promosi, dan identitas visual.',
                'Branding melalui label baju, hang tag, dan packaging dapat membantu usaha konveksi terlihat lebih profesional di mata pelanggan.',
            ],
            'sections' => [
                [
                    'title' => 'Kemitraan dan Promosi',
                    'paragraphs' => [
                        'Usaha konveksi dapat berkembang melalui kerja sama dengan toko pakaian, komunitas, sekolah, perusahaan, atau brand fashion lokal.',
                        'Promosi melalui media sosial juga penting untuk menunjukkan portofolio produksi, testimoni pelanggan, dan kualitas hasil jahitan.',
                    ],
                ],
            ],
        ],

        'warna-yang-cocok-untuk-baju' => [
            'slug' => 'warna-yang-cocok-untuk-baju',
            'title' => 'Warna yang Cocok untuk Baju',
            'author' => 'pabrik label baju',
            'image' => 'assets/articles/article7.png',
            'excerpt' => 'Pemilihan warna baju dapat memengaruhi tampilan, karakter, dan kesan sebuah produk fashion.',
            'intro' => [
                'Warna adalah elemen penting dalam dunia fashion. Warna dapat memengaruhi kesan visual, karakter produk, serta cara pelanggan memandang sebuah brand pakaian.',
            ],
            'top_title' => 'Panduan Memilih Warna Baju',
            'top_content' => [
                'Pemilihan warna baju dapat disesuaikan dengan target pasar, jenis produk, tren fashion, dan identitas brand.',
                'Warna netral seperti putih, hitam, abu-abu, dan beige cocok untuk tampilan elegan. Warna cerah cocok untuk produk yang ingin terlihat lebih ekspresif dan playful.',
            ],
            'sections' => [
                [
                    'title' => 'Hubungan Warna dan Branding',
                    'paragraphs' => [
                        'Brand fashion sebaiknya memiliki warna utama yang konsisten agar mudah dikenali pelanggan.',
                        'Warna pada pakaian, label, packaging, dan konten promosi perlu dibuat selaras agar identitas visual brand terlihat kuat.',
                    ],
                ],
            ],
        ],

        'baju-konveksi-solusi-produksi-massal' => [
            'slug' => 'baju-konveksi-solusi-produksi-massal',
            'title' => 'Baju Konveksi Solusi Produksi Massal!',
            'author' => 'indokonveksi',
            'image' => 'assets/articles/article5.png',
            'excerpt' => 'Baju konveksi menjadi solusi produksi pakaian dalam jumlah banyak dengan waktu yang lebih efisien.',
            'intro' => [
                'Baju konveksi adalah pakaian yang diproduksi dalam jumlah banyak menggunakan sistem kerja yang lebih terorganisir. Produksi konveksi banyak digunakan untuk seragam, kaos komunitas, pakaian retail, dan kebutuhan brand fashion.',
            ],
            'top_title' => 'Apa Itu Baju Konveksi?',
            'top_content' => [
                'Baju konveksi berbeda dengan jahitan satuan. Pada produksi konveksi, pakaian dibuat dalam jumlah besar dengan pola, ukuran, dan desain yang seragam.',
                'Sistem ini membantu proses produksi menjadi lebih cepat, efisien, dan konsisten dari segi kualitas.',
            ],
            'sections' => [
                [
                    'title' => 'Tahapan Produksi Konveksi',
                    'paragraphs' => [
                        'Tahapan produksi konveksi biasanya dimulai dari desain, pembuatan pola, pemotongan kain, proses jahit, finishing, quality control, hingga pengemasan.',
                        'Pada tahap finishing, label baju dan label care menjadi elemen penting agar produk terlihat lebih lengkap dan profesional.',
                    ],
                ],
            ],
        ],

        'bingung-pilih-bahan-kemeja' => [
            'slug' => 'bingung-pilih-bahan-kemeja',
            'title' => 'Bingung Pilih Bahan Kemeja? Ini 7 yang Adem, Anti Kusut dan Nyaman Dipakai!',
            'author' => 'vido garment web master',
            'image' => 'assets/articles/article8.png',
            'excerpt' => 'Referensi bahan kemeja yang nyaman, adem, tidak mudah kusut, dan cocok untuk berbagai kebutuhan.',
            'intro' => [
                'Pemilihan bahan kemeja sangat memengaruhi kenyamanan pemakai. Bahan yang tepat akan membuat kemeja terasa adem, rapi, dan tidak mudah kusut meskipun digunakan dalam waktu lama.',
            ],
            'top_title' => 'Bahan Kemeja yang Sering Digunakan',
            'top_content' => [
                'Beberapa bahan yang sering digunakan untuk kemeja antara lain katun, oxford, tropical, drill, linen, rayon, dan ripstop.',
                'Setiap bahan memiliki karakter berbeda, sehingga perlu disesuaikan dengan kebutuhan seperti kerja kantor, kegiatan outdoor, seragam, atau pakaian kasual.',
            ],
            'sections' => [
                [
                    'title' => 'Label Care untuk Bahan Kemeja',
                    'paragraphs' => [
                        'Setiap bahan kemeja membutuhkan cara perawatan yang berbeda. Karena itu, label care penting untuk memberi informasi pencucian, penyetrikaan, dan penyimpanan.',
                        'Dengan label care yang jelas, pelanggan dapat merawat produk agar tetap awet dan nyaman digunakan.',
                    ],
                ],
            ],
        ],

        'panduan-memilih-bahan-label-baju' => [
            'slug' => 'panduan-memilih-bahan-label-baju',
            'title' => 'Panduan Memilih Bahan Label Baju untuk Brand Fashion',
            'author' => 'magna printing',
            'image' => 'assets/articles/article6.png',
            'excerpt' => 'Memilih bahan label baju yang tepat dapat meningkatkan kualitas tampilan produk fashion.',
            'intro' => [
                'Label baju bukan hanya pelengkap pakaian. Label berfungsi sebagai identitas brand, penanda ukuran, informasi perawatan, dan elemen visual yang membuat produk terlihat lebih profesional.',
            ],
            'top_title' => 'Jenis Bahan Label Baju',
            'top_content' => [
                'Beberapa bahan label yang umum digunakan adalah woven label, satin label, tafeta label, cotton label, dan printed label.',
                'Pemilihan bahan label perlu disesuaikan dengan jenis pakaian, target pasar, budget produksi, serta karakter brand.',
            ],
            'sections' => [
                [
                    'title' => 'Tips Memilih Label Baju',
                    'paragraphs' => [
                        'Untuk produk premium, woven label dan satin label dapat memberikan kesan elegan. Untuk produksi massal, printed label bisa menjadi pilihan yang lebih efisien.',
                        'Pastikan label nyaman di kulit, tidak mudah rusak saat dicuci, dan memiliki desain yang mudah dibaca.',
                    ],
                ],
            ],
        ],

        'perbedaan-woven-label-dan-satin-label' => [
            'slug' => 'perbedaan-woven-label-dan-satin-label',
            'title' => 'Perbedaan Woven Label dan Satin Label',
            'author' => 'wilova label',
            'image' => 'assets/articles/article9.jpg',
            'excerpt' => 'Woven label dan satin label sama-sama populer, tetapi memiliki karakter dan fungsi yang berbeda.',
            'intro' => [
                'Woven label dan satin label adalah dua jenis label yang sering digunakan oleh brand fashion. Keduanya dapat menampilkan nama brand, logo, ukuran, atau informasi produk, tetapi memiliki bahan dan tampilan yang berbeda.',
            ],
            'top_title' => 'Apa Itu Woven Label?',
            'top_content' => [
                'Woven label dibuat dengan teknik tenun sehingga tulisan atau logo menyatu dengan serat kain. Jenis label ini terlihat premium, kuat, dan tahan lama.',
                'Woven label cocok untuk brand yang ingin menampilkan kesan eksklusif dan profesional pada produknya.',
            ],
            'sections' => [
                [
                    'title' => 'Apa Itu Satin Label?',
                    'paragraphs' => [
                        'Satin label memiliki permukaan yang halus dan sedikit mengilap. Label ini nyaman digunakan dan cocok untuk produk yang membutuhkan kesan lembut.',
                        'Satin label sering dipakai untuk label ukuran, label brand, maupun label care pada pakaian.',
                    ],
                ],
            ],
        ],

        'fungsi-label-care-pada-pakaian' => [
            'slug' => 'fungsi-label-care-pada-pakaian',
            'title' => 'Fungsi Label Care pada Pakaian',
            'author' => 'wilova label',
            'image' => 'assets/articles/article10.jpg',
            'excerpt' => 'Label care membantu pelanggan memahami cara merawat pakaian dengan benar.',
            'intro' => [
                'Label care adalah label yang berisi instruksi perawatan pakaian, seperti cara mencuci, menyetrika, mengeringkan, dan larangan penggunaan bahan tertentu.',
            ],
            'top_title' => 'Mengapa Label Care Penting?',
            'top_content' => [
                'Label care penting karena setiap jenis bahan memiliki cara perawatan yang berbeda. Tanpa informasi perawatan, pakaian bisa lebih cepat rusak, melar, luntur, atau berubah bentuk.',
                'Dengan label care, pelanggan dapat menjaga kualitas pakaian agar tetap awet setelah digunakan dan dicuci berkali-kali.',
            ],
            'sections' => [
                [
                    'title' => 'Isi yang Perlu Ada pada Label Care',
                    'paragraphs' => [
                        'Informasi yang biasanya dicantumkan pada label care meliputi komposisi bahan, simbol pencucian, suhu setrika, cara pengeringan, dan ukuran pakaian.',
                        'Desain label care sebaiknya tetap jelas, mudah dibaca, dan tidak mengganggu kenyamanan pemakai.',
                    ],
                ],
            ],
        ],

        'tips-desain-label-baju' => [
            'slug' => 'tips-desain-label-baju',
            'title' => 'Tips Membuat Desain Label Baju agar Terlihat Profesional',
            'author' => 'wilova label',
            'image' => 'assets/articles/article11.png',
            'excerpt' => 'Desain label yang baik membuat produk fashion terlihat lebih rapi, kuat, dan mudah dikenali.',
            'intro' => [
                'Desain label baju memiliki peran penting dalam membentuk identitas brand. Label yang dirancang dengan baik dapat membuat produk terlihat lebih profesional dan mudah diingat pelanggan.',
            ],
            'top_title' => 'Gunakan Identitas Brand yang Konsisten',
            'top_content' => [
                'Desain label sebaiknya mengikuti identitas brand, mulai dari logo, font, warna, hingga gaya visual. Konsistensi ini membuat produk lebih mudah dikenali.',
                'Hindari memasukkan terlalu banyak elemen pada label karena dapat membuat tampilan terlihat penuh dan sulit dibaca.',
            ],
            'sections' => [
                [
                    'title' => 'Perhatikan Ukuran dan Keterbacaan',
                    'paragraphs' => [
                        'Ukuran label harus disesuaikan dengan jenis pakaian. Label yang terlalu besar dapat mengganggu kenyamanan, sedangkan label yang terlalu kecil sulit dibaca.',
                        'Pilih font yang jelas, warna yang kontras, dan layout yang rapi agar informasi pada label mudah dipahami.',
                    ],
                ],
            ],
        ],

        'jenis-label-untuk-brand-fashion' => [
            'slug' => 'jenis-label-untuk-brand-fashion',
            'title' => 'Jenis-Jenis Label untuk Brand Fashion',
            'author' => 'wilova label',
            'image' => 'assets/articles/article13.jpg',
            'excerpt' => 'Brand fashion dapat menggunakan beberapa jenis label sesuai fungsi dan kebutuhan produk.',
            'intro' => [
                'Dalam produk fashion, label memiliki banyak jenis dan fungsi. Tidak semua label hanya berisi nama brand, karena beberapa label juga digunakan untuk ukuran, perawatan, dan informasi bahan.',
            ],
            'top_title' => 'Label Brand dan Size Label',
            'top_content' => [
                'Label brand digunakan untuk menampilkan nama atau logo brand. Label ini biasanya dipasang di bagian leher, pinggang, atau sisi pakaian.',
                'Size label digunakan untuk menunjukkan ukuran produk seperti S, M, L, XL, atau ukuran angka tertentu.',
            ],
            'sections' => [
                [
                    'title' => 'Label Care dan Hang Tag',
                    'paragraphs' => [
                        'Label care berisi informasi perawatan pakaian, sedangkan hang tag biasanya berisi identitas brand, harga, barcode, atau informasi singkat produk.',
                        'Kombinasi label brand, size label, label care, dan hang tag dapat membuat produk terlihat lebih lengkap dan profesional.',
                    ],
                ],
            ],
        ],

        'manfaat-hang-tag-untuk-branding' => [
            'slug' => 'manfaat-hang-tag-untuk-branding',
            'title' => 'Manfaat Hang Tag untuk Branding Produk Fashion',
            'author' => 'wilova label',
            'image' => 'assets/articles/article12.png',
            'excerpt' => 'Hang tag membantu meningkatkan nilai visual dan kesan profesional pada produk fashion.',
            'intro' => [
                'Hang tag adalah label gantung yang biasanya dipasang pada pakaian, tas, atau produk fashion lainnya. Selain sebagai penanda harga, hang tag juga dapat menjadi media branding yang efektif.',
            ],
            'top_title' => 'Hang Tag sebagai Identitas Produk',
            'top_content' => [
                'Hang tag dapat memuat logo, nama brand, tagline, informasi bahan, ukuran, harga, barcode, hingga akun media sosial brand.',
                'Dengan desain yang menarik, hang tag dapat membuat produk terlihat lebih premium dan meningkatkan kepercayaan pelanggan.',
            ],
            'sections' => [
                [
                    'title' => 'Tips Membuat Hang Tag yang Menarik',
                    'paragraphs' => [
                        'Gunakan bahan hang tag yang cukup tebal, desain yang rapi, dan informasi yang tidak terlalu padat.',
                        'Pastikan warna, font, dan gaya desain hang tag selaras dengan identitas visual brand agar terlihat konsisten.',
                    ],
                ],
            ],
        ],
    ];

    $articleCards = [
        'sistem-gaji-kerja-konveksi',
        'standar-ukuran-baju-anak',
        'cara-mengembangkan-jasa-konveksi',
        'warna-yang-cocok-untuk-baju',
        'baju-konveksi-solusi-produksi-massal',
        'bingung-pilih-bahan-kemeja',
        'panduan-memilih-bahan-label-baju',
        'perbedaan-woven-label-dan-satin-label',
        'fungsi-label-care-pada-pakaian',
        'tips-desain-label-baju',
        'jenis-label-untuk-brand-fashion',
        'manfaat-hang-tag-untuk-branding',
    ];

    if ($activeSlug !== null && ! array_key_exists($activeSlug, $articles)) {
        abort(404);
    }

    $activeArticle = $activeSlug ? $articles[$activeSlug] : null;
@endphp

@if ($activeArticle === null)

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
        @foreach ($articleCards as $articleSlug)
            @php
                $article = $articles[$articleSlug];
            @endphp

            <a href="{{ route('artikel.detail', ['slug' => $article['slug']]) }}" class="article-card-page">
                <img src="{{ asset($article['image']) }}" alt="{{ $article['title'] }}">

                <div class="article-card-text">
                    <h3>{{ $article['title'] }}</h3>
                    <p>- {{ $article['author'] }}</p>
                </div>
            </a>
        @endforeach
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

@else

<section class="article-detail-page">

    {{-- BREADCRUMB --}}
    <div class="breadcrumb-article">
        <a href="{{ route('home') }}">Home</a>
        <span>›</span>
        <a href="{{ route('artikel') }}">Article</a>
        <span>›</span>
        <a href="{{ route('artikel.detail', ['slug' => $activeArticle['slug']]) }}">
            {{ $activeArticle['title'] }}
        </a>
    </div>

    <div class="article-detail-container">

        {{-- DETAIL TITLE --}}
        <div class="article-detail-title">
            <h1>{{ $activeArticle['title'] }}</h1>
            <p>- {{ $activeArticle['author'] }}</p>
        </div>

        {{-- INTRO TEXT --}}
        @foreach ($activeArticle['intro'] as $paragraph)
            <p class="article-detail-intro">{{ $paragraph }}</p>
        @endforeach

        {{-- IMAGE + MAIN CONTENT --}}
        <div class="article-detail-main">
            <div class="article-detail-image">
                <img src="{{ asset($activeArticle['image']) }}" alt="{{ $activeArticle['title'] }}">
            </div>

            <div class="article-detail-text">
                <h2>{{ $activeArticle['top_title'] }}</h2>

                @foreach ($activeArticle['top_content'] as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            </div>
        </div>

        {{-- SECTIONS --}}
        @foreach ($activeArticle['sections'] as $section)
            <div class="article-detail-section">
                <h2>{{ $section['title'] }}</h2>

                @foreach ($section['paragraphs'] as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            </div>
        @endforeach

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

@endif

@endsection