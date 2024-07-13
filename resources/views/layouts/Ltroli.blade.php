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
