@extends('layouts.Lpembayaran')

@section('title', 'Surya Murah - Karpet Berkualitas')

@section('content')
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
        <a href="{{ route('pembayaran.konfirmasi', ['method' => 'BCA']) }}" class="payment-button">BCA</a>
        <a href="{{ route('pembayaran.konfirmasi', ['method' => 'BRI']) }}" class="payment-button">BRI</a>
        <a href="{{ route('pembayaran.konfirmasi', ['method' => 'Mandiri']) }}" class="payment-button">Mandiri</a>
        <a href="{{ route('pembayaran.konfirmasi', ['method' => 'COD']) }}" class="payment-button">Cash On Delivery (COD)</a>
    </div>
    <button class="back-button" onclick="window.location.href='{{ url('/') }}'">Kembali</button>
</div>
@endsection
