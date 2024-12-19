<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- إضافة رابط Bootstrap CSS من CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        @auth
            <p class="navbar-text">Welcome, {{ Auth::user()->name }}!</p>
            <a href="{{ route('logout') }}" class="btn btn-outline-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
            <a href="{{ route('register') }}" class="btn btn-outline-success">Sign Up</a>
        @endauth
    </div>
</nav>

<main class="container py-5">
    @yield('content') <!-- مكان عرض محتوى الصفحات -->
</main>

<!-- إضافة Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
