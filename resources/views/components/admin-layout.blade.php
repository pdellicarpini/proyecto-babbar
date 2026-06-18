<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Babbar'}}</title>
    <link rel="stylesheet" href=<?= url("/css/styles.css") ?>>
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div id="admin-app">
        <nav class="navbar align-items-start shadow admin-nav">
            <div class="container-fluid m-0">
                <div>
                    <ul class="navbar-nav flex-column nav-links">
                        <li>
                            <i class="fa-solid fa-table-columns"></i>
                        </li>
                        <li class="nav-item">
                            <x-nav-link to="admin" linkClass="nav-link">Dashboard</x-nav-link>
                        </li>
                        <li class="nav-item">
                            <x-nav-link to="home" linkClass="nav-link">Visitar Sitio</x-nav-link>
                        </li>
                        @auth
                        <li class="nav-item">
                            <x-nav-link to="admin.blog" linkClass="nav-link">Blog/Posts</x-nav-link>
                        </li>
                        <li class="nav-item">
                            <p class="m-0"><i class="bi bi-person-circle"></i> {{ auth()->user()->email }}</p>
                            <form action="{{ route('logout') }}" method="POST" class="m-0 p-0">
                                <button type="submit" class="nav-link btn btn-link">Cerrar Sesión</button>
                            </form>
                        </li>
                        @else
                        <li class="nav-item">
                            <x-nav-link to="login" linkClass="nav-link">Iniciar Sesión</x-nav-link>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <main class="container mt-4">
            @if(session()->has('feedback.message'))
            <div class="container alert alert-{{ session()->get('feedback.type', 'success')}} alert-dismissible fade show" role="alert">
                {{ session('feedback.message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            {{ $slot }}
        </main>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>