@extends('layouts.Lproduk')

@section('title', 'Surya Murah - Pesanan Berhasil')

@section('content')
<style>
    :root {
        --primary-color: #2c3e50;
        --secondary-color: #ecf0f1;
        --accent-color: #e74c3c;
    }
    .success-container {
        width: 80%;
        margin: 5% auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin-bottom: 30%;
    }

    .success-container h1 {
        color: #28a745;
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .success-container p {
        font-size: 1.2rem;
        color: #333;
        margin-bottom: 10px;
    }

    .success-container p strong {
        font-size: 1.4rem;
        color: #007bff;
    }

    .back-button {
        display: inline-block;
        padding: 10px 20px;
        background-color: var(--primary-color);
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1rem;
        transition: background-color 0.3s ease;
        text-decoration: none;
        margin-top: 20px;
    }

    .back-button:hover {
        background-color: var(--accent-color);
    }
</style>

<div class="success-container">
    <h1>Pesanan Berhasil</h1>
    <p>Terima kasih telah melakukan pemesanan.</p>
    <p>Pesanan Anda dengan nomor <strong>{{ $order->id }}</strong> telah berhasil dibuat.</p>
    <p>Silakan transfer ke nomor rekening berikut untuk menyelesaikan pembayaran:</p>
    <p><strong>{{ $order->payment_method }}: 1234567890</strong></p>
    <a href="{{ url('/') }}" class="back-button">Kembali ke Beranda</a>
</div>
@endsection
