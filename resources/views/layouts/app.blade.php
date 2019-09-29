<!DOCTYPE html>
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
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
<<<<<<< HEAD
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
=======
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
    
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
>>>>>>> b0a3e3978b02e2b15fa20906586dc4ae57ae6af4
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="nav-bar">
            <div class="col">
                <a href="/gerenciamento-labs/views/software_list.php">
                    <div class="nav-item row px-4 align-items-center">
                        <span class="item-icon">
                            <i class="fas fa-list"></i>
                        </span>
                        <a href="/gerenciamento-labs/views/software_list.php" class="item-name pl-3">Listar
                            softwares</a>
                    </div>
                </a>
                <a href="/gerenciamento-labs/views/software_requisition.php">
                    <div class="nav-item row px-4 align-items-center">
                        <span class="item-icon">
                            <i class="fab fa-wpforms"></i>
                        </span>
                        <a href="/gerenciamento-labs/views/software_requisition.php" class="item-name pl-3">Requisitar
                            software</a>
                    </div>
                </a>
                @if (Auth::user()->is_admin)
                <a href="/gerenciamento-labs/views/dashboard.php">
                    <div class="nav-item row px-4 align-items-center">
                        <span class="item-icon">
                            <i class="fas fa-columns"></i>
                        </span>
                        <a href="/gerenciamento-labs/views/dashboard.php" class="item-name pl-3">Dashboard</a>
                    </div>
                </a>
                @endif
                <a href="/gerenciamento-labs/server/logout.php">
                    <div class="nav-item row px-4 align-items-center">
                        <span class="item-icon">
                            <i class="fas fa-sign-out-alt"></i>
                        </span>
                        <a href="/gerenciamento-labs/server/logout.php" class="item-name pl-3">Sair</a>
                    </div>
                </a>
            </div>
        </div>
        <main class="p-4 body-content">
            @yield('content')
        </main>
    </div>
</body>

</html>