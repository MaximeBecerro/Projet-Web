<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BDE Bordeaux</title>
        <link href="css/app.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

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

        <nav class="navbar navwidht navbar-collapse-xs navbar-toggler navbar-expand-lg " id = "navbar">
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


         <div class="container">
              
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
                        @auth
                        <div class="dropdown-menu" role="button" aria-labelledby="navbarDropdownMenuLink3">
                           
                            
                        </div>
                         @endauth

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink" id= 'navdown'>
                                    <a class="dropdown-item" href="/logout">Déconnexion</a>
                                    <a class="dropdown-item" href="">Notification</a>
                                    <a class="dropdown-item" href="/basket">Panier</a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="position-ref full-height">
        
            <div class="content">
                <div class="m-t-md">
                    @yield('content')
                </div>
            </div>
        </div>

    <footer class="footer">
        @yield('footer')
        test footer
        <img src="{{ URL::to('/images/oui.jpg') }}">
    </footer> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
   
</html>
