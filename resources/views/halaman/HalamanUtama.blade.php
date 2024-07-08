@extends('layouts.Lhalaman')

@section('title', 'Surya Murah - Karpet Berkualitas')

@section('content')
<div class="hero-section">
    <div class="hero-content">
        <h1>Pilihan Cerdas Untuk Kenyamanan Setiap Ruangan</h1>
        <p>Toko Surya Murah adalah destinasi utama Anda untuk berbagai macam karpet berkualitas tinggi. Temukan kenyamanan dan gaya untuk setiap ruangan di rumah Anda.</p>
        <a href="{{ url('/produk') }}" class="cta-button">Jelajahi Sekarang</a>
        <div class="social-icons">
            <a href="#" title="WhatsApp"><img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp"></a>
            <a href="#" title="Instagram"><img src="{{ asset('images/instagram.png') }}" alt="Instagram"></a>
        </div>
        <p><strong>Temukan Kami</strong> di media sosial atau hubungi kami untuk informasi lebih lanjut.</p>
    </div>
    <div class="hero-image">
        <img src="{{ asset('images/karpet1.jpg') }}" alt="Karpet Berkualitas">
    </div>
</div>
@endsection