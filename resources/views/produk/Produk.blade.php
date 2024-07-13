@extends('layouts.Lproduk')

@section('title', 'Soza Furniture - Produk')

@section('content')
<style>
    .hero-section {
        text-align: center;
        margin-top: 20px;
        padding: 20px;
    }

    .search-container {
        margin-top: 20px;
    }

    .search-container input[type="text"] {
        width: 80%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .search-container button {
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .search-container button:hover {
        background-color: #0056b3;
    }

    .product-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
        padding: 20px;
    }

    .product-card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .product-card:hover {
        transform: scale(1.05);
    }

    .product-card img {
        width: 100%;
        height: auto;
        border-bottom: 1px solid #ddd;
    }

    .product-info {
        padding: 15px;
        text-align: center;
    }

    .product-info h3 {
        margin: 10px 0;
        font-size: 1.5em;
        color: #333;
    }

    .product-info p {
        color: #777;
    }

    @media (min-width: 768px) {
        .product-grid {
            grid-template-columns: 1fr 1fr;
        }

        .search-container input[type="text"] {
            width: 70%;
        }
    }

    @media (min-width: 1024px) {
        .product-grid {
            grid-template-columns: 1fr 1fr 1fr;
        }

        .search-container input[type="text"] {
            width: 60%;
        }
    }
</style>

<div class="hero-section">
    <h1>Temukan Produk Terbaik Kami</h1>
    <div class="search-container">
        <form action="{{ route('produk.index') }}" method="GET">
            <input type="text" name="query" placeholder="Cari produk...">
            <button type="submit">Cari</button>
        </form>
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
