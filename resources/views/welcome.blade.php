<!-- resources/views/welcome.blade.php -->
@extends('layouts.HalamanUtama')

@section('title', 'Surya Murah - Beranda')

@section('content')
<div class="hero-section">
    <div class="content">
        <h1>Pilihan Cerdas Untuk Kenyamanan Setiap Ruangan</h1>
        <p>Toko Surya Murah adalah sebuah toko yang menjual berbagai macam karpet</p>
        <a href="{{ url('/produk') }}">
            <button>Jelajahi Sekarang</button>
        </a>
    </div>
    <div class="image">
        <img src="{{ asset('images/karpet.jpg') }}" alt="Karpet">
    </div>
</div>
<div class="social-icons">
    <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp">
    <img src="{{ asset('images/instagram.png') }}" alt="Instagram">
</div>
@endsection
