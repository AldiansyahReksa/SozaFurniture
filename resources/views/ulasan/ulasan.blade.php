@extends('layouts.Lulasan')

@section('title', 'Soza Furniture - Ulasan')

@section('content')
<div class="hero-section">
    <h1>Ulasan Produk</h1>
    <div class="search-container">
        <input type="text" placeholder="Cari produk...">
        <button>Cari</button>
    </div>
</div>

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

@endsection
