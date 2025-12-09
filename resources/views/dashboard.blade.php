@extends('layout')

@section('content')

<div class="dashboard-container">
    <h2>Bienvenido, {{ auth()->user()->name }}</h2>

    <p>Aquí podrás administrar:</p>

    <ul>
        <li>Historial Médico</li>
        <li>Recordatorios</li>
        <li>Citas</li>
        <li>Mascotas</li>
    </ul>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="btn">Cerrar Sesión</button>
    </form>
</div>

@endsection
