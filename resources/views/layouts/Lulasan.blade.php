<<<<<<< HEAD
=======

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Soza Furniture')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
<body>
    @include('layouts.Lnavbar')
    {{-- <nav class="navbar">
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
        </div>
    </nav> --}}
    
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
>>>>>>> 59ce74009f7148a901220dd820b91f1a76d566e8
