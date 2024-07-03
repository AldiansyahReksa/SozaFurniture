<!-- resources/views/all-products.blade.php -->
@extends('layouts.HalamanUtama')

@section('title', 'Surya Murah - Semua Produk')

@section('content')
<div class="hero-section">
    <div class="content">
        <h1>Semua Produk</h1>
        <input type="text" placeholder="Cari produk">
        <button>Cari</button>
    </div>
</div>

<div class="products-section">
    <div class="products-list">
        @foreach ($allProducts as $products)
            <div class="products-card">
                <img src="{{ $products->image }}" alt="{{ $products->name }}">
                <h3>{{ $products->name }}</h3>
                <p>{{ $products->price }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
