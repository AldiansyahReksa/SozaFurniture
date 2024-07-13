@extends('layouts.Lhalaman')

@section('title', 'Surya Murah - Karpet Berkualitas')

@section('content')
<style>
    .hero-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 2em;
            padding-top: 5%;
            /* padding-bottom: 10%; */
            /* margin-bottom: 4em; */
            /* margin-top: 70em; */
        }
        
        .hero-content {
            flex: 1;
        }
        
        .hero-image {
            flex: 1;
        }
        
        .hero-image img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        
        h1 {
            font-size: 2.5em;
            margin-bottom: 0.5em;
            color: var(--primary-color);
        }
        
        p {
            font-size: 1.1em;
            line-height: 1.6;
            margin-bottom: 1.5em;
        }
        
        .cta-button {
            display: inline-block;
            padding: 1em 2em;
            background-color: var(--accent-color);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        
        .cta-button:hover {
            background-color: #c0392b;
        }
    .social-icons {
            display: flex;
            gap: 1em;
            margin-top: 2em;
        }
        
        .social-icons img {
            width: 30px;
            height: 30px;
            transition: transform 0.3s ease;
        }
        
        .social-icons img:hover {
            transform: scale(1.1);
        }
</style>
<div class="hero-section">
    <div class="hero-content">
        <h1>Pilihan Cerdas Untuk Kenyamanan Setiap Ruangan</h1>
        <p>Toko Surya Murah adalah destinasi utama Anda untuk berbagai macam karpet berkualitas tinggi. Temukan kenyamanan dan gaya untuk setiap ruangan di rumah Anda.</p>
        <a href="{{ url('/produk') }}" class="cta-button">Jelajahi Sekarang</a>
        <div class="social-icons">
            <a href="#" title="WhatsApp"><img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp"></a>
            <a href="https://instagram.com/soza_furniture_" title="Instagram"><img src="{{ asset('images/instagram.png') }}" alt="Instagram"></a>
        </div>
        <p><strong>Temukan Kami</strong> di media sosial atau hubungi kami untuk informasi lebih lanjut.</p>
    </div>
    <div class="hero-image">
        <img src="{{ asset('images/karpet.jpg') }}" alt="Karpet Berkualitas">
    </div>
</div>
@endsection