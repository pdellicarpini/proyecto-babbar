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
    <div id="app">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('/storage/images/logo.png') }}" alt="Logo" height="60"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <x-nav-link to="home" linkClass="nav-link">Inicio</x-nav-link>
                        </li>
                        </li>
                        <li class="nav-item">
                            <x-nav-link to="posts" linkClass="nav-link">Blog</x-nav-link>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('catalog') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Catálogo
                            </a>
                            <ul class="dropdown-menu">
                                <li><x-nav-link to="catalog" :params="['category' => 'velas']" linkClass="dropdown-item">Velas</x-nav-link></li>
                                <li><x-nav-link linkClass="dropdown-item" to="catalog" :params="['category' => 'yeso']">Yeso</x-nav-link></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><x-nav-link linkClass="dropdown-item" to="catalog">Mostrar todo</x-nav-link></li>
                            </ul>
                        </li>
                        @auth
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                <button type="submit" class="nav-link btn btn-link">{{ auth()->user()->email }} | Cerrar Sesión</button>
                            </form>
                        </li>
                        @if(auth()->user()->role === 'admin')
                        <li class="nav-item">
                            <x-nav-link to="admin" linkClass="nav-link">Admin</x-nav-link>
                        </li>
                        @endif
                        @else
                        <li class="nav-item">
                            <x-nav-link to="login" linkClass="nav-link"> <i class="bi bi-person-circle mx-1"></i> Iniciar Sesión</x-nav-link>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-3">
            @if(session()->has('feedback.message'))
            <div class="container alert alert-{{ session()->get('feedback.type', 'success')}} alert-dismissible fade show" role="alert">
                {{ session('feedback.message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            {{ $slot }}
        </main>
        <footer>
            <p>Todos los derechos reservados © Babbar 2026 | Priscila Delli Carpini</p>
        </footer>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>