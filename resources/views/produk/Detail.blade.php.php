@extends('layouts.Lproduk')

@section('title', 'Detail Produk - ' . $product->product_name)

@section('content')
<div class="product-detail">
    <div class="product-image">
        <img src="{{ $product->image }}" alt="{{ $product->product_name }}">
    </div>
    <div class="product-info">
        <h1>{{ $product->product_name }}</h1>
        <p>{{ $product->product_price }}</p>
        <p>Merek: {{ $product->brand }}</p>
        <p>Tipe: {{ $product->type }}</p>
        <p>Detail Barang: {{ $product->product_details }}</p>
        <p>Stok: {{ $product->stock }}</p>
        <a href="{{ route('purchase', ['id' => $product->id]) }}">
            <button>Beli Sekarang</button>
        </a>
    </div>
</div>
@endsection
