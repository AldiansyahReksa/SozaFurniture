<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Soza Furniture')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #ecf0f1;
            --accent-color: #e74c3c;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--secondary-color);
            color: var(--primary-color);
        }
        
        .navbar {
            background-color: var(--primary-color);
            padding: 1em;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .navbar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .logo img {
            height: 40px;
        }
        
        .nav-links a {
            color: var(--secondary-color);
            text-decoration: none;
            margin-left: 2em;
            transition: color 0.3s ease;
        }
        
        .nav-links a:hover {
            color: var(--accent-color);
        }
        
        .container {
            max-width: 1200px;
            margin: 2em auto;
            padding: 0 2em;
        }
        
        .hero-section {
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('images/karpet1.jpg') }}');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 100px 0;
            margin-bottom: 2em;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        
        .hero-section h1 {
            font-size: 2.5em;
            margin-bottom: 0.5em;
            font-weight: 600;
        }
        
        .search-container {
            display: flex;
            justify-content: center;
            margin-top: 2em;
        }
        
        .search-container input {
            padding: 1em;
            width: 300px;
            border: none;
            border-radius: 50px 0 0 50px;
            font-size: 1em;
        }
        
        .search-container button {
            padding: 1em 2em;
            background-color: var(--accent-color);
            color: white;
            border: none;
            border-radius: 0 50px 50px 0;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }
        
        .search-container button:hover {
            background-color: #c0392b;
        }
        
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 2em;
        }
        
        .product-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
        }
        
        .product-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .product-info {
            padding: 1.5em;
        }
        
        .product-info h3 {
            margin: 0 0 0.5em 0;
            font-size: 1.2em;
            color: var(--primary-color);
        }
        
        .footer {
            background-color: var(--primary-color);
            color: var(--secondary-color);
            text-align: center;
            padding: 2em 0;
            margin-top: 4em;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-content">
            <div class="logo">
                <img src="{{ asset('images/logoSozaFurniture.png') }}" alt="Logo">
            </div>
            <div class="nav-links">
                <a href="{{ url('/') }}">Beranda</a>
                <a href="{{ url('/ulasan') }}">Ulasan</a>
                <!-- <a href="{{ url('/produk') }}">Produk</a> -->
                <a href="{{ url('/troli') }}">Troli</a>
            </div>
        </div>
    </nav>
    
    <div class="container">
        @yield('content')
    </div>
    
    <footer class="footer">
        <p>&copy; 2024 Soza Furniture. All rights reserved.</p>
    </footer>
</body>
</html>