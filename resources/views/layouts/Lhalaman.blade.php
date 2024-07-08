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
            margin-top: 4em;
        }
        
        @media (max-width: 768px) {
            .hero-section {
                flex-direction: column;
            }
            
            .hero-content, .hero-image {
                flex: none;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-content">
            <div class="logo">
                <img src="{{ asset('images/logoSozaFurniture.png') }}" alt="Logo">
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