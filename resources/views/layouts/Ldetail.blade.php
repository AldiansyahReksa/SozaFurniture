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
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            height: 40px; /* Tinggi navbar */
            display: flex; /* Membuat logo menjadi flex container */
            align-items: center; /* Posisikan logo secara vertikal di tengah navbar */
        }

        .logo img {
            height: 500%; /* Ukuran gambar logo */
        }

        .nav-links {
            display: flex;
            align-items: center;
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

        .nav-list {
            display: none;
            flex-direction: column;
            background-color: var(--primary-color);
            position: absolute;
            top: 70px;
            right: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 999; /* Tetapkan z-index untuk memastikan tampil di atas konten utama */
        }

        .nav-list.active {
            display: flex; /* Tampilkan daftar navigasi saat aktif */
        }

        .nav-list a {
            padding: 1em;
            white-space: nowrap;
            color: var(--secondary-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .nav-list a:hover {
            color: var(--accent-color);
        }

        .nav-toggle {
            display: none; /* Sembunyikan tombol hamburger secara default */
        }

        .nav-toggle span {
            background-color: var(--secondary-color);
            border-radius: 2px;
            height: 3px;
            margin: 3px 0;
            width: 25px;
            display: block;
        }

        .container {
            max-width: 1200px;
            margin: 2em auto;
            padding: 0 2em;
        }

        .hero-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('images/karpet1.jpg') }}');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 100px 0;
            margin-bottom: 2em;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
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
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
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

        /* New Styles for Product Detail */
        .product-detail {
            display: flex;
            flex-direction: row;
            gap: 2em;
        }

        .product-image {
            flex: 1;
        }

        .product-image img {
            width: 100%;
            border-radius: 10px;
        }

        .product-info {
            flex: 2;
        }

        .product-info h1 {
            font-size: 2em;
            margin-bottom: 0.5em;
            color: var(--primary-color);
        }

        .product-info p {
            margin: 0.5em 0;
            font-size: 1.1em;
        }

        .product-info button {
            padding: 1em 2em;
            background-color: var(--accent-color);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        .product-info button:hover {
            background-color: #c0392b;
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .nav-toggle {
                display: flex; /* Tampilkan tombol hamburger di tampilan mobile */
                cursor: pointer;
                z-index: 1001; /* Tetapkan z-index agar di atas konten utama */
            }

            .nav-list {
                position: fixed; /* Ubah posisi daftar navigasi untuk mengisi layar di tampilan mobile */
                top: 0;
                right: 0;
                height: 100%;
                width: 70%; /* Lebar daftar navigasi di tampilan mobile */
                max-width: 300px; /* Lebar maksimum daftar navigasi */
                display: flex;
                flex-direction: column;
                background-color: var(--primary-color);
                transform: translateX(100%); /* Sembunyikan daftar navigasi dari awal */
                transition: transform 0.3s ease-in-out; /* Efek transisi saat ditampilkan */
                z-index: 1000; /* Tetapkan z-index agar di atas konten utama */
            }

            .nav-list.active {
                transform: translateX(0); /* Tampilkan daftar navigasi saat aktif */
            }

            .nav-list a {
                color: var(--secondary-color);
                text-decoration: none;
                padding: 1em;
                transition: color 0.3s ease;
            }

            .nav-list a:hover {
                color: var(--accent-color);
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-content">
            <div class="logo">
                <img src="{{ asset('images/logoSozaFurniture.png') }}" alt="Logo Soza Furniture">
                </div>
            <div class="menu-icon" onclick="toggleMenu()">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="nav-links" id="navLinks">
                <a href="{{ url('/') }}">Beranda</a>
                <a href="{{ url('/ulasan') }}">Ulasan</a>
                <a href="{{ url('/produk') }}">Produk</a>
                <a href="{{ url('/troli') }}">Troli</a>
            </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer class="footer">
        <p>&copy; 2024 Soza Furniture. All rights reserved.</p>
    </footer>

    <script>
        function toggleMenu() {
            var navLinks = document.getElementById('navList');
            navLinks.classList.toggle('open');
        }
    </script>
</body>
</html>
