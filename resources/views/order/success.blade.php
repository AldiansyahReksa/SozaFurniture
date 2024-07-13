@extends('layouts.Lproduk')

@section('title', 'Surya Murah - Pesanan Berhasil')

@section('content')
<div class="success-container">
    <h1>Pesanan Berhasil</h1>
    <p>Terima kasih telah melakukan pemesanan. Pesanan Anda dengan nomor {{ $order->id }} telah berhasil dibuat.</p>
    <p>Silakan transfer ke nomor rekening berikut untuk menyelesaikan pembayaran:</p>
    <p><strong>{{ $order->payment_method }}: 1234567890</strong></p>
    <a href="{{ url('/') }}">
        <button class="back-button">Kembali ke Beranda</button>
    </a>
</div>
@endsection