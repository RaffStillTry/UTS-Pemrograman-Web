<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') | Taskly</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    @if (session('sudah_login'))
        <x-navbar />
    @endif

    <main class="container">
        @yield('content')
    </main>

    <x-footer />

</body>
</html>