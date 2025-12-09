@extends('layout')

@section('content')

<div class="auth-container">
    <h2>Iniciar Sesión</h2>

    <form method="POST" action="/login">
        @csrf

        <label>Correo Electrónico</label>
        <input type="email" name="email" required>

        <label>Contraseña</label>
        <input type="password" name="password" required>

        <label class="remember">
            <input type="checkbox" name="remember"> Recordarme
        </label>

        <button type="submit" class="btn">Ingresar</button>

        <p>¿No tienes cuenta? <a href="/register">Regístrate aquí</a></p>
    </form>
</div>

@endsection
