<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <title>Bibliotheque</title>
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>
    <body>
    <nav class="navBar">
            
            
            <div class="logoIMG">
                <img classe="h" src="{{ asset('images/j.jpg') }}" alt="Example Image">
            </div>
           
        
    </nav>
        
    <div class="header">
                <h1>Welcome Admin </h1><br>
                <h1>Systéme management  <span>IQRA </span></h1>
    </div>

    <div class="row1-container">

        <div class="box box-down cyan" onclick="window.location='/Student';">
            <h3><i id="cc"class="fa fa-search" aria-hidden="true"></i> Chercher Livres</h3>
            <p>pour chercher un livre </p>
            <div class="logo"><img src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt=""></div>
        </div>

        <div class="box red" onclick="window.location='/liste';">
            <h3><i id="cc"class="fa fa-book" aria-hidden="true"></i> Les Livre </h3>
            <p>Tout Les Livres de Stock</p>
            <img src="https://assets.codepen.io/2301174/icon-team-builder.svg" alt="">
        </div>

        <div class="box box-down blue" onclick="window.location='/livres';" >
            <h3><i id="cc"class="fa fa-plus" aria-hidden="true"></i> Add Livres</h3>
            <p>Pour ajouter un Livres</p>
            <img src="https://assets.codepen.io/2301174/icon-calculator.svg" alt="">
        </div>
        
  </div>

  <div class="row2-container">
        <div class="box orange" onclick="window.location='/category';">
            <h3><i id="cc"class="fa fa-server" aria-hidden="true"></i> Catégory</h3>
            <p>Ajouter un Catégory</p>
            <img src="https://assets.codepen.io/2301174/icon-karma.svg" alt="">
        </div>
        <div class="box orange" onclick="window.location='/return';">
            <h3><i id="cc"class="fa fa-repeat" aria-hidden="true"></i>  Livre Sorter</h3>
            <p>Les livres Sorter</p>
            <img src="https://assets.codepen.io/2301174/icon-karma.svg" alt="">
        </div>
        
        

  </div>


     
        
     </body>
</html>
