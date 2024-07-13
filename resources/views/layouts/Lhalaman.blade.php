{{-- <!DOCTYPE html>
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
            --text-color: #34495e;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--secondary-color);
            color: var(--text-color);
        }
        
        .navbar {
            background-color: var(--primary-color);
            padding: 1em;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            height: 60px;
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 300%;
            margin-right: 1em;
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
        
        .container {
            max-width: 1200px;
            margin: 2em auto;
            padding: 0 2em;
        }
        
        .hero-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 2em;
            margin-bottom: 4em;
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
        
        .footer {
            background-color: var(--primary-color);
            color: var(--secondary-color);
            text-align: center;
            padding: 2em 0;
            margin-top: 13em;
            margin-bottom: 5;
        }
        
        /* Media Query for Responsive Navbar */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                position: absolute;
                top: 60px; /* Adjust according to your navbar height */
                left: 0;
                width: 100%;
                background-color: var(--primary-color);
                padding: 1em;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                flex-direction: column;
                align-items: center;
            }
            
            .nav-links.open {
                display: flex;
            }
            
            .nav-links a {
                margin-left: 0;
                margin-bottom: 1em;
                width: 100%;
                text-align: center;
            }
        }
        
        .menu-icon {
            display: none;
            cursor: pointer;
        }
        
        .menu-icon div {
            width: 25px;
            height: 3px;
            background-color: var(--secondary-color);
            margin: 5px;
            transition: transform 0.3s ease;
        }
        
        .menu-icon.open div {
            background-color: var(--accent-color);
        }
        
        @media (max-width: 768px) {
            .menu-icon {
                display: block;
            }
            
            .nav-links {
                display: none;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
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
            var navLinks = document.getElementById("navLinks");
            navLinks.classList.toggle("open");
        }
    </script>
</body>
</html> --}}
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
            --text-color: #34495e;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--secondary-color);
            color: var(--text-color);
        }

        .container {
            max-width: 1200px;
            margin: 2em auto;
            padding: 0 2em;
        }
    </style>
</head>
<body>
    @include('layouts.Lnavbar')

    <div class="container">
        @yield('content')
    </div>
    
    @include('layouts.Lfooter')
    
    <script>
        function toggleMenu() {
            var navLinks = document.getElementById("navLinks");
            navLinks.classList.toggle("open");
        }
    </script>
</body>
</html>

