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
        <header class="header title flex-center row " >
            <div class="col-md-1.5"> 
                    <img src="{{ URL::to('/images/logo.png') }} ">
            </div>
            <div class="col-xs-2 col-md-6.5 flex-center"> 
               
           Bureau des élèves CESI Bordeaux
           </div>
        </header>

        <nav class="navbar  navwidht navbar-toggler navbar-expand-lg" id = "navbar">
         @yield('navbar')
         <a class="navbar-brand text mx-auto" href="#" ></a>

         <ul class="navbar-nav mx-auto ">
           <li class="nav-item active">
             <a class="nav-link text" href="/">Accueil</a>
           </li>
           <li class="nav-item">
             <a class="nav-link text" href="/evenements">Événement</a>
           </li>
           <li class="nav-item">
             <a class="nav-link text" href="/idees">Boite à idées</a>
           </li>
           
           <li class="nav-item">
                <a class="nav-link text" href="/boutique">Boutique</a>
            </li>
         </ul>


         <ul class="navbar-nav navright navbar-collapse "> 
            <li class="nav-item  ">
                <a class="nav-link text" href="/login ">Se connecter</a>
            </li>
            <li class="nav-item  ">
                    <a class="nav-link text" href="/register">Inscription</a>
            </li>
         </ul>
        </nav>

        <div class="flex-center position-ref full-height">
            

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
