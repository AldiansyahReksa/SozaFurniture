<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Surya Murah')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #563a21;
            padding: 1em;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 1em;
        }
        .container {
            padding: 2em;
            background-color: #fefefe;
            max-width: 1200px;
            margin: 2em auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .footer {
            background-color: #563a21;
            color: white;
            text-align: center;
            padding: 1em;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        .hero-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 2em 0;
        }
        .hero-section img {
            max-width: 50%;
            height: auto;
        }
        .hero-section .content {
            max-width: 45%;
        }
        .hero-section button {
            background-color: #563a21;
            color: white;
            border: none;
            padding: 1em 2em;
            cursor: pointer;
        }
        .social-icons {
            margin-top: 2em;
        }
        .social-icons img {
            width: 40px;
            height: 40px;
            margin-right: 1em;
        }
        .product-section {
            margin-top: 2em;
        }
        .product-carousel {
            display: flex;
            overflow-x: auto;
        }
        .product-carousel::-webkit-scrollbar {
            display: none;
        }
        .product-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 1em;
            margin: 0.5em;
            min-width: 200px;
            text-align: center;
        }
        .product-card img {
            max-width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
            margin-bottom: 0.5em;
        }
        .carousel-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .carousel-buttons button {
            background-color: #563a21;
            color: white;
            border: none;
            padding: 0.5em 1em;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 40px;">
        </div>
        <div class="nav-links">
            <a href="{{ url('/') }}">Surya Murah</a>
            <a href="{{ url('/') }}">Beranda</a>
            <a href="{{ url('/ulasan') }}">Ulasan</a>
            <a href="{{ url('/produk') }}">Produk</a>
            <a href="{{ url('/Troli') }}">Troli</a>

        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <div class="footer">
        &copy; 2024 Surya Murah
    </div>
</body>
</html>
