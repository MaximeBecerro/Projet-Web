@extends('master')

@section('content')
  <div class="titlepage">
    Bienvenue à l'accueil
  </div>

  <div>

    <div id="carousel" class="carousel slide sizecarousel" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
          </ol>

      <div class="carousel-inner">
        <div class="carousel-item active" >
          <img class="block w-50" src="{{ URL::to('/images/logo.png') }}" alt="First slide" >
          <div class="carousel-caption d-none d-md-block descriptionC">
            <h5>Venez voir notre boutique de goodies</h5>
          </div>    
        </div>
        <div class="carousel-item">
          <img class="block w-50" src="{{ URL::to('/images/logo.png') }}" alt="Second slide">
          <div class="carousel-caption d-none d-md-block descriptionC">
            <h5>Venez voir notre boutique de goodies </h5>
          </div>  
        </div>
        <div class="carousel-item">
          <img class="block w-50" src="{{ URL::to('/images/logo.png') }}" alt="Third slide">
          <div class="carousel-caption d-none d-md-block descriptionC">
            <h5>Venez voir notre boutique de goodies </h5>
          </div>  
        </div>

        <div class="carousel-item">
          <img class="block w-50" src="{{ URL::to('/images/logo.png') }}" alt="Fourth slide">
          <div class="carousel-caption d-none d-md-block descriptionC">
           <h5>Évènement à venir </h5>
          </div>  
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>

    <script>
          $('carousel').carousel({
        interval: 1;
      })  
    </script>
  
    </div>

  </div>

  <div class="description">
    Description du BDE du CESI de Bordeaux avec une histoire et tout
  </div>
@stop




