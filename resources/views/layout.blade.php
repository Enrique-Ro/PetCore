<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCore Solutions</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <!-- NAVBAR SOLO PARA HOME -->
    <header class="main-header">
        <div class="container header-container">

            <div class="logo">
                <i class="fas fa-paw"></i>
                <h1>Pet<span>Core</span> Solutions</h1>
            </div>

            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Inicio</a></li>
                    <li><a href="#Nosotros">Quiénes Somos</a></li>
                    <li><a href="#animales">Animales</a></li>
                    <li><a href="#testimonios">Testimonios</a></li>
                    <li><a href="{{ route('veterinarians.index') }}">Veterinarios</a></li>

                    @auth
                    <li><a href="{{ route('user.panel') }}">Mi Panel</a></li>
                    @endauth

                    @guest
                    <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                    <li><a href="{{ route('register') }}">Registrarse</a></li>
                    @endguest
                </ul>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <!-- Chatbot -->
    @include('components.chatbot')

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} PetCore Solutions</p>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
