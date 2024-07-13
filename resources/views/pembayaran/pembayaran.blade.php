@extends('layouts.Lpembayaran')

@section('title', 'Surya Murah - Karpet Berkualitas')

@section('content')
<style>
     .pembayaran-container {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        background-color: #f5f5f5;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .pembayaran-container h1, .pembayaran-container h2 {
        text-align: center;
    }

    .pembayaran-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .pembayaran-table th, .pembayaran-table td {
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
        justify-content: space-around;
        margin-bottom: 20px;
    }

    .payment-button {
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .payment-button:hover {
        background-color: #0056b3;
    }

    .back-button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: var(--primary-color);
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-align: center;
        transition: background-color 0.3s ease;
    }

    .back-button:hover {
        background-color: #e63946;
    }
</style>
<div class="pembayaran-container">
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
        <button class="payment-button">BCA</button>
        <button class="payment-button">BRI</button>
        <button class="payment-button">Mandiri</button>
        <button class="payment-button">Cash On Delivery (COD)</button>
    </div>
    <button class="back-button" onclick="window.location.href='{{ url('/') }}'">Kembali</button>
</div>
@endsection
