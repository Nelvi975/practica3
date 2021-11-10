<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->
                    <!-- agregar menu -->
                    @if(Auth::check())
                        @if(Auth::user()->rol=="administrador")
                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-crear" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Queja
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown-crear">
                                    <a class="dropdown-item" href="{{ route('Queja.create') }}">Crear Queja</a>
                                    <a class="dropdown-item" href="{{ route('Queja.index') }}">Mostrar Queja</a>
                                </div>

                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-crear" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Cliente
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown-crear">
                                    <a class="dropdown-item" href="{{ route('Cliente.create') }}">Crear Clientes</a>
                                    <a class="dropdown-item" href="{{ route('Cliente.index') }}">Mostrar Clientes</a>
                                </div> </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-crear" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Servicio
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown-crear">
                                    <a class="dropdown-item" href="{{ route('Servicio.create') }}">Crear Servicio</a>
                                    <a class="dropdown-item" href="{{ route('Servicio.index') }}">Mostrar Servicio</a>
                                </div>

                            </li></li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-crear" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Facturacion
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown-crear">
                                    <a class="dropdown-item" href="{{ route('Facturacion.create') }}">Crear Facturacion</a>
                                    <a class="dropdown-item" href="{{ route('Facturacion.index') }}">Mostrar Facturacion</a>
                                </div>

                            </li></li>


                    </ul>
                            @elseif (Auth::user()->rol=="trabajador")
                            <li class="nav-item">
                                <a href="{{route('home')}}" class="nav-link">dashboard</a>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-crear" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Derivacion
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown-crear">
                                    <a class="dropdown-item" href="{{ route('Derivacion.create') }}">Crear Derivacion</a>
                                    <a class="dropdown-item" href="{{ route('Derivacion.index') }}">Mostrar Derivacion</a>
                                </div>

                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-crear" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Promocion
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown-crear">
                                    <a class="dropdown-item" href="{{ route('Promocion.create') }}">Crear Promocion</a>
                                    <a class="dropdown-item" href="{{ route('Promocion.index') }}">Mostrar Promocion</a>
                                </div>



                            </li>
                            </ul>
                            <ul class="navbar-nav mr-auto">
                            </ul>

                        @endif
                        @endif

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
            @yield('content')
        </main>
    </div>
</body>
</html>
