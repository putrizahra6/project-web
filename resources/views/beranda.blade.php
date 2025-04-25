@extends('layouts.app')

@section('content')

<!-- Hero Section Start -->
<section class="hero" id="home">
    <main class="content">
        <h1>Mari Melangkah Dengan Cabin</h1>
        <p>Temani langkahmu menjelajahi alam bersama perlengkapan terbaik dari Cabin Outdoor.</p>
        <a href="#" class="cta">Sewa Sekarang</a>
    </main>
</section>
<!-- Hero Section End -->

<!-- About Section Start -->
<section class="about" id="about"></section>
<section class="keunggulan">
    <div class="container">
        <h2>Kenapa Pilih Cabin Outdoor?</h2>
        <div class="fitur">
            <div class="fitur-item">
                <h3>🔒 Tahan Cuaca Ekstrem</h3>
                <p>Dirancang untuk bertahan di kondisi hujan, angin, dan suhu dingin.</p>
            </div>
            <div class="fitur-item">
                <h3>🎒 Ringan & Praktis</h3>
                <p>Mudah dibawa dan disimpan, cocok untuk backpacking.</p>
            </div>
            <div class="fitur-item">
                <h3>🛠️ Mudah Dirakit</h3>
                <p>Pemasangan tenda dan alat lainnya super cepat, bahkan untuk pemula.</p>
            </div>
        </div>
        <p>Berikut produk keunggulan kami yang siap menemani setiap petualanganmu.</p>
        <div class="galeri-produk">
            <img src="{{ asset('img/foto1.jpg') }}" alt="Tenda Cabin" />
            <img src="{{ asset('img/foto2.jpg') }}" alt="Tas1" />
            <img src="{{ asset('img/foto3.jpg') }}" alt="Tas2" />
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Katalog Start -->
<section class="menu" id="menu"></section>
<section class="our-brand">
    <div class="container">
        <h2>Our Brand</h2>
        <p>Brand-brand terpercaya dalam dunia petualangan outdoor.</p>
        <div class="brand-list">
            <img src="{{ asset('img/brand1.png') }}" alt="northface">
            <img src="{{ asset('img/brand2.png') }}" alt="REI">
            <img src="{{ asset('img/brand3.png') }}" alt="Eiger">
            <img src="{{ asset('img/brand4.jpeg') }}" alt="Consina">
        </div>
    </div>
</section>

<section class="katalog-produk">
    <div class="container">
        <h2>Produk Unggulan</h2>
        <p>Sewa peralatan outdoor terbaik untuk petualanganmu!</p>
        <div class="produk-grid">
            <div class="produk-card">
                <img src="{{ asset('img/tenda6p.jpg') }}" alt="Tenda 6P">
                <h3>Tenda 6P</h3>
                <p class="harga">100K <span>/Hari</span></p>
                <a href="#" class="btn-detail">Details</a>
            </div>
            <div class="produk-card">
                <img src="{{ asset('img/tenda8p.jpg') }}" alt="Tenda 8P">
                <h3>Tenda 8P</h3>
                <p class="harga">120K <span>/Hari</span></p>
                <a href="#" class="btn-detail">Details</a>
            </div>
            <div class="produk-card">
                <img src="{{ asset('img/glamping.jpg') }}" alt="Tenda Glamping">
                <h3>Tenda Glamping</h3>
                <p class="harga">100K <span>/Hari</span></p>
                <a href="#" class="btn-detail">Details</a>
            </div>
            <div class="produk-card">
                <img src="{{ asset('img/flysheet.jpg') }}" alt="Fly Sheet">
                <h3>Fly Sheet</h3>
                <p class="harga">50K <span>/Hari</span></p>
                <a href="#" class="btn-detail">Details</a>
            </div>
        </div>
    </div>
</section>

<section class="katalog-lengkap">
    <div class="container" style="text-align: center; margin-top: 40px;">
        <button onclick="openPopup()" class="btn-katalog">
            📄 Lihat Katalog Lengkap
        </button>
    </div>
</section>
<!-- Katalog End -->

@endsection
