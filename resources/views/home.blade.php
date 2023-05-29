<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Bibliotheque</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>

<body style="overflow-y: auto">
    <nav class="navBar">
        <div class="logoIMG">
            <img classe="h" src="{{ asset('images/j.jpg') }}" alt="Example Image">
        </div>

    <div class="header">
        <h1>Systéme management <span>IQRA </span></h1>
    </div>

    <div class="row1-container">

        <div class="box red" onclick="window.location='/books';">
            <h3><i id="cc"class="fa fa-book" aria-hidden="true"></i> Les Livres </h3>
            <p>Tout Les Livres de Stock</p>
            <img src="https://assets.codepen.io/2301174/icon-team-builder.svg" alt="">
        </div>

        <div class="box box-down blue" onclick="window.location='/add-book';">
            <h3><i id="cc"class="fa fa-plus" aria-hidden="true"></i> Ajouter un Livre</h3>
            <p>Pour ajouter les Livres</p>
            <img src="https://assets.codepen.io/2301174/icon-calculator.svg" alt="">
        </div>
    </div>

    <div class="row2-container">
        <div class="box orange" onclick="window.location='/category';">
            <h3><i id="cc"class="fa fa-server" aria-hidden="true"></i> Catégory</h3>
            <p>Ajouter un Catégory</p>
            <img src="https://assets.codepen.io/2301174/icon-karma.svg" alt="">
        </div>
    </div>
</body>

</html>
