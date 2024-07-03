<!-- resources/views/products2.blade.php -->
@extends('layouts.HalamanUtama')

@section('title', 'Surya Murah - Produk 2')

@section('content')
<div class="hero-section">
    <div class="content">
        <h1>Produk Terbaik Kita</h1>
        <input type="text" placeholder="Cari produk">
        <button>Cari</button>
    </div>
    <div class="image">
        <img src="{{ asset('images/karpet.jpg') }}" alt="Karpet">
    </div>
</div>

<div class="product-section">
    <a href="{{ url('/all-products') }}" class="all-products-btn">Lihat Semua Produk</a>
    <div class="carousel-buttons">
        <button onclick="prevSlide()">&#9664;</button>
        <button onclick="nextSlide()">&#9654;</button>
    </div>
    <div class="product-carousel" id="carousel">
        @foreach ($products as $product)
            <div class="product-card">
                <img src="{{ $product->image }}" alt="{{ $product->name }}">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->price }}</p>
            </div>
        @endforeach
    </div>
</div>

<script>
    let currentIndex = 0;
    const products = document.querySelectorAll('.product-card');
    const totalProducts = products.length;

    function showSlide(index) {
        const carousel = document.getElementById('carousel');
        carousel.scrollTo({
            left: products[index].offsetLeft,
            behavior: 'smooth'
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalProducts;
        showSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + totalProducts) % totalProducts;
        showSlide(currentIndex);
    }
</script>
@endsection
