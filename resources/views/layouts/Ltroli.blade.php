<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Soza Furniture')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
        
        .logo {
            height: 40px;
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 100%;
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
        
        .footer {
            background-color: var(--primary-color);
            color: var(--secondary-color);
            text-align: center;
            padding: 2em 0;
            margin-top: 4em;
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

        .troli-container {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        background-color: #f5f5f5;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .troli-container h1, .troli-container h2 {
        text-align: center;
    }

    .troli-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .troli-table th, .troli-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    .troli-table th {
        background-color: #f2f2f2;
    }

    .qty-input {
        width: 50px; /* Adjust the width as needed */
        text-align: center;
    }

    .total-column {
        width: 20%; /* Set the fixed width for the total column */
        text-align: right; /* Align text to the right */
    }

    .action-column {
        width: 80px; /* Adjust the width as needed */
        text-align: center;
    }

    .delete-btn {
        background: none;
        border: none;
        color: red;
        cursor: pointer;
        font-size: 16px;
    }

    .delete-btn:hover {
        color: darkred;
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
                <a href="{{ route('produk.index') }}">Produk</a>
                <a href="{{ route('troli.index') }}">Troli</a>
            </div>
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
</html>
