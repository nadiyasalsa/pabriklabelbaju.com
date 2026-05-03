@extends('layouts.app')

@section('content')

<section class="admin-dashboard-page">
    <div class="admin-dashboard-header">
        <h4>ADMIN DASHBOARD</h4>
        <h1>Halo, {{ Auth::user()->name }}</h1>
        <p>Kelola seluruh konten website Wilova melalui dashboard admin.</p>
    </div>

    <div class="admin-menu-grid">
        <div class="admin-menu-card">
            <h3>Kelola Product</h3>
            <p>Tambah, edit, hapus, dan lihat data product label baju.</p>
            <a href="#">Masuk</a>
        </div>

        <div class="admin-menu-card">
            <h3>Kelola Testimoni</h3>
            <p>Kelola review dan pengalaman pelanggan Wilova.</p>
            <a href="#">Masuk</a>
        </div>

        <div class="admin-menu-card">
            <h3>Kelola Article</h3>
            <p>Tambah dan update artikel informasi seputar label baju.</p>
            <a href="#">Masuk</a>
        </div>

        <div class="admin-menu-card">
            <h3>Kelola Profile</h3>
            <p>Ubah informasi perusahaan, kontak, dan deskripsi website.</p>
            <a href="#">Masuk</a>
        </div>
    </div>
</section>

@endsection