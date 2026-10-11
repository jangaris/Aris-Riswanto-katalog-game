<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | GameVault</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand brand" href="{{ route('beranda') }}"><i class="bi bi-controller"></i> GameAris</a>
            <ul class="navbar-nav ms-auto flex-row gap-3">
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('beranda') ? 'active' : '' }}"
                        href="{{ route('beranda') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link {{ request()->routeIs('game.*') ? 'active' : '' }}"
                        href="{{ route('game.index') }}">Daftar Game</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer class="py-4 mt-5 text-center">
        <small>&copy; {{ date('Y') }} GameAris - Penyedia Game</small>
    </footer>
</body>

</html>