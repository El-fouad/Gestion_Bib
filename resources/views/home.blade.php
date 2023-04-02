<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <title>iqr</title>
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    </head>
    <body>
        <nav class="navBar">
            <div class="btnAdmin">
                <button>
                    <img src="{{ asset('images/user.png') }}" alt="Example Image">
                    Admin</button>
            </div>
            <div class="logo">
                <div class="logoIMG">
                    <img src="{{ asset('images/read.png') }}" alt="Example Image">
                </div>
                <div class="title">
                    إقراء
                </div>
            </div>
        </nav>

        <div class="menu">
            <div class="card_option">
                <button>Acceuil</button>
                <button>Acceuil</button>
                <button>Acceuil</button>
                <button>Acceuil</button>
                <button>Acceuil</button>
            </div>
            <div class="card_logout">
                <button>Log out</button>
            </div>
        </div>
        <div class="content">
            
        </div>
        
     </body>
</html>
