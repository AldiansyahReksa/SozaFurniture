@extends('layouts.Ldetail')

@section('title', 'Detail Produk - ' . $product->product_name)

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
    .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 2em;
        }

        .product-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .product-info {
            padding: 1.5em;
        }

        .product-info h3 {
            /* margin: 0 0 0.5em 0;
             */
             margin-bottom: 5%;
            font-size: 1.2em;
            color: var(--primary-color);
        }

        
        /* New Styles for Product Detail */
        .product-detail {
            display: flex;
            flex-direction: row;
            gap: 2em;
            padding-bottom: 16%;
            /* margin-top:7%; */
            padding-top:7%;
        }

        .product-image {
            flex: 1;
        }

        .product-image img {
            width: 100%;
            border-radius: 10px;
        }

        .product-info {
            flex: 2;
        }

        .product-info h1 {
            font-size: 2em;
            margin-bottom: 0.5em;
            color: var(--primary-color);
        }

        .product-info p {
            margin: 0.5em 0;
            font-size: 1.1em;
        }

        .product-info button {
            padding: 1em 2em;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        .product-info button:hover {
            background-color:var(--accent-color);
        }
</style>
<div class="product-detail">
    <div class="product-info">
        <a href="{{ url('/produk') }}">
            <button>kembali</button>
        </a>

        <h1>{{ $product->product_name }}</h1>
        <p>Harga: {{ $product->product_price }}</p>
        <p>Merek: {{ $product->brand }}</p>
        <p>Tipe: {{ $product->type }}</p>
        <p>Detail Barang: {{ $product->product_details }}</p>
        <p>Stok: {{ $product->stock }}</p>
        <a href="{{ url('/troli/tambah/' . $product->id) }}">
            <button>Tambah Ke Troli</button>
        </a>
        <a href="{{ url('/pembayaran') }}">
            <button>Beli Sekarang</button>
        </a>
    </div>
    <div class="product-image">
        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->product_name }}">
    </div>
</div>
@endsection
