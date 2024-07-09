@extends('layouts.Lproduk')

@section('title', 'Soza Furniture - Produk')

@section('content')
<div class="hero-section">
    <h1>Temukan Produk Terbaik Kami</h1>
    <div class="search-container">
        <input type="text" placeholder="Cari produk...">
        <button>Cari</button>
    </div>
</div>

<div class="product-grid">
    @foreach ($products as $product)
        <div class="product-card">
            <a href="{{ route('produk.detail', ['id' => $product->id]) }}">
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->product_name }}">
                <div class="product-info">
                    <h3>{{ $product->product_name }}</h3>
                    <p>{{ $product->short_description }}</p>
                </div>
            </a>
        </div>
    @endforeach
</div>
@endsection
