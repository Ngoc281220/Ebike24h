<!-- resources/views/layout/app.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Trang chủ')</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <header>
        @include('layouts.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>© 2025 Ebike24h</p>
    </footer>
</body>
</html>
