@extends('layouts.Lulasan')

@section('title', 'Soza Furniture - Ulasan')

@section('content')
<style>
    :root {
        --primary-color: #2c3e50;
        --secondary-color: #ecf0f1;
        --accent-color: #e74c3c;
    }

    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        background-color: var(--secondary-color);
        color: var(--primary-color);
    }

    .container {
        max-width: 1200px;
        margin: 2em auto;
        padding: 0 2em;
        margin-bottom: 15%;
    }

    .hero-section {
        background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('images/karpet.jpg') }}');
        background-size: cover;
        background-position: center;
        color: white;
        text-align: center;
        padding: 100px 0;
        margin-bottom: 2em;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .hero-section h1 {
        font-size: 2.5em;
        margin-bottom: 0.5em;
        font-weight: 600;
    }

    .search-container {
        display: flex;
        justify-content: center;
        margin-top: 2em;
    }

    .search-container input {
        padding: 1em;
        width: 300px;
        border: none;
        border-radius: 50px 0 0 50px;
        font-size: 1em;
    }

    .search-container button {
        padding: 1em 2em;
        background-color: var(--accent-color);
        color: white;
        border: none;
        border-radius: 0 50px 50px 0;
        cursor: pointer;
        font-size: 1em;
        transition: background-color 0.3s ease;
    }

    .search-container button:hover {
        background-color: #c0392b;
    }

    .reviews-section {
        display: flex;
        flex-direction: column;
        gap: 20px;
        margin-top: 2em;
    }

    .review-item {
        display: flex;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
        background-color: white;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .left-side {
        flex: 2;
    }

    .right-side {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .right-side img {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
    }

    .star-rating {
        color: gold;
        font-size: 1.5em;
    }
</style>

<div class="hero-section">
    <h1>Ulasan Produk</h1>
    <div class="search-container">
        <input type="text" placeholder="Cari produk...">
        <button>Cari</button>
    </div>
</div>

<div class="container">
    <div class="reviews-section">
        @if($reviews->isEmpty())
            <p><center>Ulasan belum tersedia</center></p>
        @else
            @foreach ($reviews as $review)
                <div class="review-item">
                    <div class="left-side">
                        <h2>{{ $review->product->product_name }}</h2>
                        <h3>{{ $review->customer_name }}</h3>
                        <p>{{ $review->review }}</p>
                        <div class="star-rating">
                            <span>⭐⭐⭐⭐⭐</span>
                        </div>
                    </div>
                    <div class="right-side">
                        <img src="{{ $review->product->image_path }}" alt="Produk">
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
