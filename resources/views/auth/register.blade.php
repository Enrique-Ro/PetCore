@extends('layout')

@section('content')

<div class="auth-container">
    <h2>Crear Cuenta</h2>

    <form method="POST" action="/register">
        @csrf

        <label>Nombre Completo</label>
        <input type="text" name="name" required>

        <label>Correo Electrónico</label>
        <input type="email" name="email" required>

        <label>Contraseña</label>
        <input type="password" name="password" required>

        <label>Confirmar Contraseña</label>
        <input type="password" name="password_confirmation" required>

        <button type="submit" class="btn">Registrarse</button>

        <p>¿Ya tienes cuenta? <a href="/login">Inicia sesión</a></p>
    </form>
</div>

@endsection
