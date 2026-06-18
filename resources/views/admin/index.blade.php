<x-admin-layout>
    <x-slot:title>Dashboard</x-slot:title>

    <div class="container d-flex flex-column align-items-center justify-content-center" style="min-height: 80vh;">
        <h1 class="titles">Panel de Administración</h1>
        <p class="text-center">Bienvenido al panel de administración. Desde acá podés gestionar el contenido del sitio.</p>
        @guest
        <a href="{{ route('login') }}" class="btn main-button">Iniciar sesión para comenzar</a>
        @endguest
    </div>
</x-admin-layout>