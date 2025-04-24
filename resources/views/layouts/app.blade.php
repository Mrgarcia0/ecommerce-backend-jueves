<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>UNAB Tienda - @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #FF6B00; /* Color naranja principal */
            --primary-dark: #E05D00;
            --footer-bg: #FF6B00; /* Naranja para el footer */
        }
        
        body {
            background-color: #f8f9fa;
            font-family: 'Nunito', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        .navbar {
            background-color: var(--primary-color) !important;
            box-shadow: 0 2px 4px rgba(0,0,0,.1);
            padding: 15px 0;
        }
        
        .logo-container {
            height: 50px; /* Tamaño aumentado para el logo */
        }
        
        .logo-container img {
            height: 100%;
            width: auto;
        }
        
        .nav-link {
            color: white !important;
            font-weight: 500;
            font-size: 1.1rem;
            margin: 0 10px;
        }
        
        .nav-link:hover {
            color: #f0f0f0 !important;
            text-decoration: underline;
        }
        
        .auth-container {
            max-width: 600px; /* Contenedor más ancho */
            width: 100%;
            margin: 50px auto;
            padding: 40px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,.1);
        }
        
        .auth-title {
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700;
            font-size: 2rem;
        }
        
        .form-label {
            font-weight: 600;
            margin-top: 15px;
        }
        
        .form-control {
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            width: 100%;
            padding: 12px;
            font-weight: 600;
            font-size: 1.1rem;
            margin-top: 20px;
            border-radius: 8px;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(255, 107, 0, 0.25);
        }
        
        .auth-footer {
            text-align: center;
            margin-top: 20px;
        }
        
        .auth-footer a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }
        
        .auth-footer a:hover {
            text-decoration: underline;
        }
        
        footer {
            background-color: var(--footer-bg);
            color: white;
            padding: 1.5rem 0;
            margin-top: auto;
            text-align: center;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- Logo de UNAB Tienda -->
                    <div class="logo-container">
                        <img src="data:image/png;base64,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" alt="UNAB Tienda Logo">
                    </div>
                </a>
                <div class="navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Iniciar sesion</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>
        
        <footer>
            <div class="container">
                <p class="mb-0">© {{ date('Y') }} UNAB Tienda. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>