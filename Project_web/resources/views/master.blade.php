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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <!-- Styles -->
        {{HTML::style("css/style.css")}}
        

    </head>
    <body>
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
        <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
        @yield('cookies')
        <script>
        window.addEventListener("load", function(){
          "palette": {
            "popup": {
        window.cookieconsent.initialise({
            },
              "background": "#000"
            "button": {
              "background": "#f1d600"
          },
            }
          "showLink": false,
          "content": {
            "message": "Ce site utilise les cookies afin d'améliorer votre expérience de navigation.",
            "dismiss": "Compris !"
          }
        })});
        </script>
        <header class="header title flex-center row " >
            <div class="col-md-1.5"> 
                    <img src="{{ URL::to('/images/logo.png') }} ">
            </div>
            <div class="col-xs-2 col-md-6.5 flex-center"> 
               
           Bureau des élèves CESI Bordeaux
           </div>
        </header>

        <nav class="navbar navwidht navbar-collapse-xs navbar-toggler navbar-expand-lg " id = "navbar">
         
         <a class="navbar-brand text" href="#" ></a>

         <ul class="navbar-nav mr-auto ">
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
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }} </a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __("S'enregister") }}</a>
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
                  </ul>
                </div>
            </div>
        </nav>

        <div class="position-ref full-height">
          <div class="content ">
              <div class="m-t-md">
                  @yield('content')
              </div>
          </div>
        </div>

    <footer class="footer">
        @yield('footer')
        <footer class="page-footer font-small unique-color-dark">
            <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
              <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
              <script>
              window.addEventListener("load", function(){
              window.cookieconsent.initialise({
                "palette": {
                  "popup": {
                    "background": "#000"
                  },
                  "button": {
                    "background": "#f1d600"
                  }
                },
                "showLink": false,
                "content": {
                  "message": "Ce site utilise les cookies afin d'améliorer votre expérience de navigation.",
                  "dismiss": "Compris !"
                }
              })});
              </script>

                <div style="background-color: #A9A9A9;">
                  <div class="container">
            
                    <!-- Grid row-->
                    <div class="footer-head row py-4 d-flex align-items-center">
            
                      <!-- Grid column -->
                      <div class="footer-head col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0">Rejoignez nous sur les réseaux sociaux !</h6>
                      </div>
                      <!-- Grid column -->
            
                      <!-- Grid column -->
                      <div class="col-md-6 col-lg-7 text-center text-md-right">
            
                        <!-- Facebook -->
                        <a class="fb-ic" href="https://fr-fr.facebook.com/bdecesibdx/">
                          <i class="fab fa-facebook-f white-text mr-4"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic" href="https://twitter.com/bdecesibordeaux">
                          <i class="fab fa-twitter white-text mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic" href="https://www.instagram.com/bde_cesi_bdx/">
                          <i class="fab fa-instagram white-text"> </i>
                        </a>
            
                      </div>
                      <!-- Grid column -->
            
                    </div>
                    <!-- Grid row-->
            
                  </div>
                </div>
            
                <!-- Footer Links -->
                <div class="container text-center text-md-left mt-5">
            
                  <!-- Grid row -->
                  <div class="row mt-3">
            
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            
                      <!-- Content -->
                      <h6 class="text-uppercase font-weight-bold">BDE Cesi Bordeaux</h6>
                      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                      <p>On fait pas partie du BDE nouuuus ?
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2827.863941183876!2d-0.579220948548562!3d44.86506457899581!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5528150e890055%3A0x83b09a60bc069e60!2s264+Boulevard+Godard%2C+33300+Bordeaux%2C+France!5e0!3m2!1sfr!2sae!4v1548249884699" width="200" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                      </p>
            
                    </div>
                    <!-- Grid column -->
            
                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            
                      <!-- Links -->
                      <h6 class="text-uppercase font-weight-bold">place holder</h6>
                      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                      <p>
                        <a href="/boutique">La boutique</a>
                      </p>
                      <p>
                        <a href="/idees">La boite à idéés</a>
                      </p>
                      <p>
                        <a href="/evenements">Les évènements</a>
                      </p>
            
                    </div>
                    <!-- Grid column -->
            
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            
                      <!-- Links -->
                      <h6 class="text-uppercase font-weight-bold">Liens utiles</h6>
                      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                      <p>
                        <a href="https://www.cesi.fr">Site du CESI</a>
                      </p>
                      <p>
                        <a href="#!">WAKANDA FOREVER</a>
                      </p>
                      <p>
                        <a href="#!">Help</a>
                      </p>
            
                    </div>
                    <!-- Grid column -->
            
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            
                      <!-- Links -->
                      <h6 class="text-uppercase font-weight-bold">Contact</h6>
                      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                      <p>
                        <i class="fas fa-home mr-3"></i> 264 Boulevard Godard, 33300 Bordeaux, France</p>
                      <p>
                        <i class="fas fa-envelope mr-3"></i>communication@bdecesibordeaux.fr</p>
                      <p>
                        <i class="fas fa-phone mr-3"></i>06 47 25 64 27</p>
            
                    </div>
                    <!-- Grid column -->
            
                  </div>
                  <!-- Grid row -->
            
                </div>
                <!-- Footer Links -->
            
                <!-- Copyright -->
                <div class="footer-copyright text-center py-3" href="/mentions_legales">Touts droits réservés : BDE CESI Bordeaux :
                  <a href="/mentions_legales"> Mentions légales</a>
                </div>
                <!-- Copyright -->
    </footer> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
   
</html>
