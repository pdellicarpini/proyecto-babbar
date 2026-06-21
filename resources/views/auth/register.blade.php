<x-main-layout>
    <x-slot:title>Crear Cuenta</x-slot:title>
    <div class="login">
        <h1 class="titles text-center">¡Bienvenid@!</h1>
        <p class="text-center">Creá tu cuenta y comenzá a disfrutar de nuestros productos</p>
        <form action="{{ route('register.store') }}" method="POST" class="auth-form register-form">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Ingrese su nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                @error('name')
                    <div class="text-danger" id="title-error">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Ingrese su correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger" id="title-error">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Ingrese su contraseña</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
                @error('password')
                    <div class="text-danger" id="title-error">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirme su contraseña</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}">
                @error('password_confirmation')
                    <div class="text-danger" id="title-error">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn">Crear Cuenta</button>
        </form>
        <div class="text-center mt-3">
            ¿Ya tenés cuenta? <a href="{{ route('login') }}">Inicia sesión acá</a>
        </div>
    </div>
</x-main-layout>