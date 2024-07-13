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
            margin-bottom: 13%;
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
            flex-direction: row;
            align-items: center;
            gap: 20px;
        }

        .payment-button {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px 30px;
            border-radius: 50px;
            background-color: #e0e0e0;
            box-shadow: 9px 9px 16px #bebebe, -9px -9px 16px #ffffff;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .payment-button:hover {
            box-shadow: inset 5px 5px 10px #bebebe, inset -5px -5px 10px #ffffff;
        }

        .payment-button img {
            width: 70px;
            height: auto;
        }

        .back-button {
            display: block;
            width: 5%;
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
