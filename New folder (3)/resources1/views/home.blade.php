<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="logo">
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('customers') }}">Customers</a>
            <a href="{{ route('services') }}">Services</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
    </header>

    <main class="container mt-5">
        <h1>Welcome to Our Website</h1>
        <p>This is the home page.</p>
    </main>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
