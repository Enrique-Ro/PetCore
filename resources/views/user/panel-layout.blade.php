<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel del Usuario - PetCore</title>

    <link rel="stylesheet" href="{{ asset('css/panel.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

<div class="dashboard-wrapper">

    <!-- Sidebar -->
    <aside class="sidebar">
        <h3>Mi Panel</h3>

        <ul>
            <li><a href="{{ route('medical.history') }}"><i class="fas fa-notes-medical"></i> Historial Médico</a></li>
            <li><a href="{{ route('reminders.index') }}"><i class="fas fa-bell"></i> Recordatorios</a></li>
            <li><a href="{{ route('appointments.index') }}"><i class="fas fa-calendar-alt"></i> Citas</a></li>
            <li><a href="{{ route('pets.index') }}"><i class="fas fa-paw"></i> Mascotas</a></li>

            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="logout-btn"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</button>
                </form>
            </li>
        </ul>
    </aside>

    <!-- Contenido -->
    <section class="dashboard-content">
        @yield('content')
    </section>

</div>

</body>
</html>
