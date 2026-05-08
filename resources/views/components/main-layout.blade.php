<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Babbar'}}</title>
    <link rel="stylesheet" href=<?= url("/css/styles.css") ?>>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Babbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <x-nav-link to="/" linkClass="nav-link">Inicio</x-nav-link>
                        </li>
                        <li class="nav-item">
                            <x-nav-link to="nosotros" linkClass="nav-link">Nosotros</x-nav-link>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Catálogo
                            </a>
                            <ul class="dropdown-menu">
                                <li><x-nav-link to="catalogo/velas" linkClass="dropdown-item">Velas</x-nav-link></li>
                                <li><x-nav-link linkClass="dropdown-item" to="catalogo/yeso">Yeso</x-nav-link></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><x-nav-link linkClass="dropdown-item" to="catalogo">Mostrar todo</x-nav-link></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="container py-3">
            {{ $slot }}
        </main>
        <footer>
            <p>Todos los derechos reservados © Babbar 2026</p>
        </footer>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>