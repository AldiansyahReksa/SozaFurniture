@extends('layouts.Lhalaman')

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
            <tr>
                <td><img src="{{ asset('images/karpet1.jpg') }}" alt="Karpet 3x4" width="100"></td>
                <td>Karpet 3x4<br>Warna: Cokelat</td>
                <td>Rp. 500.000</td>
                <td>1</td>
                <td>Rp. 500.000</td>
            </tr>
            <tr>
                <td><img src="{{ asset('images/karpet2.jpg') }}" alt="Karpet 4x6" width="100"></td>
                <td>Karpet 4x6<br>Warna: Hijau</td>
                <td>Rp. 800.000</td>
                <td>2</td>
                <td>Rp. 1.600.000</td>
            </tr>
        </tbody>
    </table>
    <div class="total-container">
        <p>Total: <strong>Rp. 2.100.000</strong></p>
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
@endsection
