<style>
    :root {
            --primary-color: #2c3e50;
            --secondary-color: #ecf0f1;
            --accent-color: #e74c3c;
            --text-color: #34495e;
        }
    .navbar {
        background-color: var(--primary-color);
        padding: 1em;
        /* margin-bottom: 1px; */
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
        color: white;
        font-family: "sans-serif";
        font-size: 24px;
    }

    .logo img {
        height: 100%;
        margin-left: 1em;
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

<nav class="navbar">
    <div class="logo">
        <img src="{{ asset('images/logosoza.png') }}" alt="Logo Soza Furniture">
        Soza Furniture
    </div>
    <div class="menu-icon" onclick="toggleMenu()">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="nav-links" id="navLinks">
        @if (!Request::is('/'))
            <a href="{{ url('/') }}">Beranda</a>
            <a href="{{ url('/ulasan') }}">Ulasan</a>
            <a href="{{ url('/produk') }}">Produk</a>
            <a href="{{ url('/troli') }}">Troli</a>
        @endif
    </div>
</nav>