@extends('layouts.Lpembayaran')

@section('title', 'Surya Murah - Karpet Berkualitas')

@section('content')
<head>
    {{-- <link rel="stylesheet" href="{{ asset('css/toast.css') }}"> --}}
</head>
<style>
    .pembayaran-container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f5f5f5;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 15%;
        margin-top: 5%;
    }

    .pembayaran-container h1,
    .pembayaran-container h2 {
        text-align: center;
    }

    .pembayaran-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        overflow-x: auto;
    }

    .pembayaran-table th,
    .pembayaran-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    .pembayaran-table th {
        background-color: #f2f2f2;
    }

    .total-container {
        text-align: right;
        margin-bottom: 20px;
    }

    .payment-methods {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin-bottom: 20px;
    }

    .payment-button {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 15px;
        background-color: white;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
        text-decoration: none;
        width: 150px;
        height: 100px;
    }

    .payment-button img {
        max-width: 100%;
        max-height: 70px;
    }

    .payment-button:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .back-button {
        display: block;
        width: 7%;
        padding: 10px;
        background-color: var(--primary-color);
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-align: center;
        transition: background-color 0.3s ease;
        margin-bottom: 20px;
    }

    .back-button:hover {
        background-color: #e63946;
    }
</style>

<div class="pembayaran-container">
    <button class="back-button" onclick="window.location.href='{{ url('/') }}'">Kembali</button>
    <h1>Pembayaran</h1>
    <table class="pembayaran-table">
        <thead>
            <tr>
                <th>Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @php
                $grandTotal = 0;
            @endphp
            @foreach ($products as $cart)
            @php
                $total = $cart->product->product_price * $cart->qty;
                $grandTotal += $total;
            @endphp
                <tr>
                    <td>{{ $cart->product->product_name }}</td>
                    <td>
                        Brand : {{ $cart->product->brand }}
                        Tipe: {{ $cart->product->type }}
                        {{ $cart->product->product_details }}
                    </td>
                    <td>{{ $cart->product->product_price }}</td>
                    <td>{{ $cart->qty }}</td>
                    <td>{{ $total }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="total-container">
        <p>Total : <strong>{{ $grandTotal }}</strong></p>
    </div>
    <h2>Metode Pembayaran</h2>
    <div class="payment-methods">
        <a href="{{ route('pembayaran.konfirmasi', ['method' => 'BCA']) }}" class="payment-button">
            <img src="{{ asset('images/BCA.png') }}" alt="BCA">
        </a>
        <a href="{{ route('pembayaran.konfirmasi', ['method' => 'BRI']) }}" class="payment-button">
            <img src="{{ asset('images/BRI.png') }}" alt="BRI">
        </a>
        <a href="{{ route('pembayaran.konfirmasi', ['method' => 'Mandiri']) }}" class="payment-button">
            <img src="{{ asset('images/Mandiri.png') }}" alt="Mandiri">
        </a>
        <a href="{{ route('pembayaran.konfirmasi', ['method' => 'COD']) }}" class="payment-button">
            <img src="{{ asset('images/COD.png') }}" alt="COD">
        </a>
    </div>
</div>
@endsection
