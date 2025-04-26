@extends('layouts.app')

@section('content')

<!-- Hero Section Start -->
<section class="hero" id="home">
    <main class="content">
        <h1>Tentang Cabin <span>Outdoor</span>.</h1>
    </main>
</section>
<!-- Hero Section End -->

<!-- Tentang Kami Section -->
<link rel="stylesheet" href="{{ asset('css/tentang-kami.css') }}">
<section class="tentang">
    <div class="tentang-container">

        <div class="tentang-img">
            <img src="{{ asset('img/about.png') }}" alt="tentang kami">
        </div>

        <div class="tentang-text">
            <h2>Tentang Cabin <span>Outdoor</span>.</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum nisi, assumenda facere commodi vitae aut dolorem sequi autem ullam vel maxime nulla fugit. Ipsa nesciunt odit iusto debitis et asperiores.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero rem assumenda consectetur optio labore voluptates placeat eaque nesciunt consequatur! Libero vitae natus odio rem iste tempore porro eum neque ipsum.</p>
        </div>

    </div>
</section>

@endsection
