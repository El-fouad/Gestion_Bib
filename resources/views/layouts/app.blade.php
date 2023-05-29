<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="stylesheet" href="{{ asset('css/layout.css') }}"> --}}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
</head>

<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-black shadow-sm">
            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/j.jpg') }}" style="height:33px" alt="Logo ">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item mr-2 bg-light rounded-5">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item ml-2 bg-light rounded-5">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle bg-light rounded-5" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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


        {{-- 
            <nav class="nav_Bar">
                <div class="logo_IMG">
                    <img src="{{ asset('images/j.jpg') }}" alt="Logo ">
                </div>
            </nav> --}}



        <div class="page" style="position:fixed">
            <div class="menu">
                <nav class="card_option">
                    <a id="Home" href="/">
                        <i id="cc"class="fa fa-home" aria-hidden="true"></i>
                        Acceuil
                    </a>
                    {{-- <a id="findBook" href="/find-book">
                        <i id="cc"class="fa fa-search" aria-hidden="true"></i>
                        Cherche Livres
                    </a> --}}
                    <a id="Books" href="/books">
                        <i id="cc"class="fa fa-book" aria-hidden="true"></i>
                        Les Livres
                    </a>
                    <a id="addbook" href="/add-book">
                        <i id="cc"class="fa fa-plus" aria-hidden="true"></i>
                        Ajouter un Livre
                    </a>
                    <a id="Categorys" href="/category">
                        <i id="cc"class="fa fa-server" aria-hidden="true"></i>
                        Catégory
                    </a>
                    {{-- <a id="bookBack" href="/return">
                        <i id="cc"class="fa fa-repeat" aria-hidden="true"></i>
                        Livres Return
                    </a> --}}
                </nav>
                <div class="logout_btn">
                    @Auth
                    <button><i id="cc"class="fa fa-sign-out" aria-hidden="true"></i><a class="dropdown-item"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </button>
                    @endAuth
                </div>
            </div>
            <div class="content" >
                @yield('content')
                {{-- <table class="table caption-top">
                    <caption>
                        List of users
                    </caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> --}}






    </div>


    {{-- <body>
            <nav class="nav_Bar">
                <div class="logo_IMG">
                    <img src="{{ asset('images/j.jpg') }}" alt="Logo ">
                </div>
                <ul class="nto">
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                <h1 class="title_page">Livres</h1>
            </nav>
            <div class="page">
                <div class="menu">
                    <nav class="card_option">
                        <a id="Home" href="/">
                            <i id="cc"class="fa fa-home" aria-hidden="true"></i>
                            Acceuil
                        </a>
                        <a id="findBook" href="/find-book">
                            <i id="cc"class="fa fa-search" aria-hidden="true"></i>
                            Cherche Livres
                        </a>
                        <a id="Books" href="/books">
                            <i id="cc"class="fa fa-book" aria-hidden="true"></i>
                            Les Livres
                        </a>
                        <a id="addbook" href="/add-book">
                            <i id="cc"class="fa fa-plus" aria-hidden="true"></i>
                            Ajouter un Livre
                        </a>
                        <a id="Categorys" href="/category">
                            <i id="cc"class="fa fa-server" aria-hidden="true"></i>
                            Catégory
                        </a>
                        <a id="bookBack" href="/return">
                            <i id="cc"class="fa fa-repeat" aria-hidden="true"></i>
                            Livres Return
                        </a>
                    </nav>
                    <div class="logout_btn">
                        <button><i id="cc"class="fa fa-sign-out" aria-hidden="true"></i> Log out</button>
                    </div>
                </div>
        
                <div class="content">
                    @yield('content')
                </div>
            </div> --}}
</body>

</html>
