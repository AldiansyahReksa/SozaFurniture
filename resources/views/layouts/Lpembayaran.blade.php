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
        
        
       
        .pembayaran-container {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        background-color: #f5f5f5;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .pembayaran-container h1, .pembayaran-container h2 {
        text-align: center;
    }

    .pembayaran-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .pembayaran-table th, .pembayaran-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    .pembayaran-table th {
        background-color: #f2f2f2;
    }

    .total-container {
        text-align: right;
        margin-bottom: 20px;
    }

    .payment-methods {
        display: flex;
        justify-content: space-around;
        margin-bottom: 20px;
    }

    .payment-button {
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .payment-button:hover {
        background-color: #0056b3;
    }

    .back-button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: var(--primary-color);
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-align: center;
        transition: background-color 0.3s ease;
    }

    .back-button:hover {
        background-color: #e63946;
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
