<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <div class="navbar">
            <a href="{{ route('homepage') }}">Home</a>
            <a href="{{ route('product') }}">Product</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; UMKM Desa Margodadi</p>
    </footer>
</body>
</html>
