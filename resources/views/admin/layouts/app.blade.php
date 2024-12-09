<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - @yield('title')</title>
    <!-- Add any CSS or meta tags specific to the admin panel here -->
</head>
<body>
<header>
    <h1>Admin Panel</h1>
    <!-- Include navigation or header content here -->
</header>

<main>
    @yield('content')
</main>

<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
    @csrf
</form>
<a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

<footer>
    <p>&copy; {{ date('Y') }} Admin Panel</p>
</footer>
</body>
</html>
