<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Bibliotheque</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav class="nav_Bar">
        <div class="logo_IMG">
            <img src="{{ asset('images/j.jpg') }}" alt="Logo ">
        </div>
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
                    Add Livre
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
    </div>
</body>

</html>
