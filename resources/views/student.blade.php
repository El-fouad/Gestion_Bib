<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <title>Bibliotheque</title>
        <link rel="stylesheet" href="{{ asset('css/student.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <nav class="navBar">
            
            
                <div class="logoIMG">
                    <img class="h" src="{{ asset('images/j.jpg') }}" alt="Example Image">
                </div>
        </nav>
        <h2>Chercher Livres</h2>
        <div class="addcat">
        <label for="fname">Nom de Livres:</label>
         <input type="text" id="fname" name="fname" placeholder="Entree Nom..."><br>
         <button><i id="cc"class="fa fa-search" aria-hidden="true"></i> Cherche </button>
         </div>


        <div class="menu">
            <nav class="card_option">
            <a href="/"><i id="cc"class="fa fa-home" aria-hidden="true"></i>            Acceuil</a>
                <a class="ac" href="/Student"><i id="cc"class="fa fa-search" aria-hidden="true"></i>  Cherche Livre</a>
                <a  href="/liste"><i id="cc"class="fa fa-book" aria-hidden="true"></i>       Les Livres</a>
                <a  href="/livres"><i id="cc"class="fa fa-plus" aria-hidden="true"></i>   Add Livre</a>
                <a href="/category"><i id="cc"class="fa fa-server" aria-hidden="true"></i>  Catégory</button>
                <a  href="/return"><i id="cc"class="fa fa-repeat" aria-hidden="true"></i>   Livres Return</a>


</nav>
            <div class="card_logout">
                <button><i id="cc"class="fa fa-sign-out" aria-hidden="true"></i> Log out</button>
            </div>
        </div>
        <div class="content">
            
        </div>
        
     </body>
</html>
