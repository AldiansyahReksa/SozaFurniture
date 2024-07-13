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
        
        .container {
            max-width: 1200px;
            margin: 2em auto;
            padding: 0 2em;
        }

        .hero-section {
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('images/karpet.jpg') }}');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 100px 0;
            margin-bottom: 9em;
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

        .reviews-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 20px;
        }

        .review-item {
            display: flex;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }

        .left-side {
            flex: 2;
        }

        .right-side {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .right-side img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .star-rating {
            color: gold;
            font-size: 1.5em;
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

            .hero-section {
                padding: 80px 0;
                margin-bottom: 6em;
            }

            .hero-section h1 {
                font-size: 2em;
            }

            .search-container {
                margin-top: 1em;
            }

            .search-container input {
                width: 100%;
                border-radius: 50px;
                margin-bottom: 1em;
            }

            .search-container button {
                border-radius: 50px;
                width: 100%;
            }

            .troli-container {
                width: 100%;
                padding: 10px;
            }

            .troli-container h1, .troli-container h2 {
                font-size: 1.5em;
            }

            .troli-table th, .troli-table td {
                padding: 0.8em;
                font-size: 0.9em;
            }

            .troli-table img {
                max-width: 50px;
            }

            .troli-table input[type="number"] {
                width: 40px;
            }

            .troli-container button {
                width: 100%;
            }

            .troli-table .total-column,
            .troli-table .action-column {
                white-space: nowrap; /* Prevent text wrapping */
            }
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
