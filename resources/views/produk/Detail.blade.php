@extends('layouts.Ldetail')

@section('title', 'Detail Produk - ' . $product->product_name)

@section('content')
<div class="product-detail">
    <div class="product-info">
        <h1>{{ $product->product_name }}</h1>
        <p>Harga: {{ $product->product_price }}</p>
        <p>Merek: {{ $product->brand }}</p>
        <p>Tipe: {{ $product->type }}</p>
        <p>Detail Barang: {{ $product->product_details }}</p>
        <p>Stok: {{ $product->stock }}</p>
        <form action="{{ route('troli.tambah', $product->id) }}" method="POST">
            @csrf
            <button type="submit">Tambah Ke Troli</button>
        </form>
        <a href="{{ url('/pembayaran') }}">
            <button>Beli Sekarang</button>
        </a>
    </div>
    <div class="product-image">
        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->product_name }}">
    </div>
</div>
@endsection
