<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BDE Bordeaux</title>
        <link href="css/app.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        {{HTML::style("css/style.css")}}
        

    </head>
    <body>
        <header class="header title flex-center">
            @yield('header')
                <img src="{{ URL::to('/images/logo.png') }} ">
           BUREAU DES ELEVES CESI BORDEAUX
        </header>

        <nav class="navbar navbar-expand-md" id = "navbar">
         @yield('navbar')
         <a class="navbar-brand text" href="#" > BDE CESI BORDEAUX</a>
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link text" href="#">Accueil</a>
           </li>
           <li class="nav-item">
             <a class="nav-link text" href="#">Événement</a>
           </li>
           <li class="nav-item">
             <a class="nav-link text" href="#">Boite à idées</a>
           </li>
           <li class="nav-item">
             <a class="nav-link text" href="#">Boutique</a>
           </li>
         </ul>
        </nav>

        <div>
            @yield('logo')
        </div>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    @yield('title')
                </div>
            </div>
        </div>

    <footer class="footer">
        @yield('footer')
        test footer
        <img src="{{ URL::to('/images/oui.jpg') }}">
    </footer> 

    </body>
   
</html>
