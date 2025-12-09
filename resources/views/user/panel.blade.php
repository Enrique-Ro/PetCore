@extends('layout')

@section('content')

<div class="dashboard-wrapper">

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <h3>Mi Panel</h3>

        <ul class="sidebar-menu">

            <li><a href="{{ route('medical.history') }}"><i class="fas fa-notes-medical"></i> Historial Médico</a></li>

            <li><a href="{{ route('reminders.index') }}"><i class="fas fa-bell"></i> Recordatorios</a></li>

            <li><a href="{{ route('appointments.index') }}"><i class="fas fa-calendar-alt"></i> Citas</a></li>

            <li><a href="{{ route('pets.index') }}"><i class="fas fa-paw"></i> Mascotas</a></li>

            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="logout-btn-sidebar">
                        <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                    </button>
                </form>
            </li>

        </ul>
    </aside>

    <!-- CONTENIDO DEL PANEL -->
    <section class="dashboard-content">
        <h2>Bienvenido, {{ auth()->user()->name }}</h2>
        <p>Selecciona una opción del menú para comenzar.</p>
    </section>

</div>

@endsection
