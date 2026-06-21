<x-main-layout>
    <x-slot:title>Iniciar Sesión</x-slot:title>
    <div class="login">
        <h1 class="titles text-center">Iniciar Sesión</h1>
        <form action="{{ route('login.process') }}" method="POST" class="auth-form">
            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn main-button">Iniciar Sesión</button>
        </form>
        <div class="text-center mt-3">
            ¿No tenés cuenta? <a href="{{ route('register') }}">Registrate acá</a>
        </div>
    </div>
</x-main-layout>