@extends('master')
<!-- Récupération du master -->

@section('content')
<!-- Modification du content -->
<div class="titlepage">
  Bienvenue à l'accueil
  <!-- Titre de la page -->
</div>

<div>

  <div id="carousel" class="carousel slide sizecarousel" data-ride="carousel" data-interval="2000">
    <!-- Caroussel changeant entre les 3 produits les plus vendus et l'évènement du mois-->


    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="block w-50" src="{{ URL::to('/images/logo.png') }}" alt="First slide">

        <h5 class="descriptionC">Venez voir notre boutique de goodies</h5>

      </div>

      <div class="carousel-item">
        <img class="block w-50" src="{{ URL::to('/images/logo.png') }}" alt="Second slide">
        <h5 class="descriptionC">Venez voir notre boutique de goodies</h5>
      </div>
      <div class="carousel-item">
        <img class="block w-50" src="{{ URL::to('/images/logo.png') }}" alt="Third slide">
        <h5 class="descriptionC">Venez voir notre boutique de goodies</h5>
      </div>

      <div class="carousel-item">
        <img class="block w-50" src="{{ URL::to('/images/logo.png') }}" alt="Fourth slide">
        <h5 class="descriptionC">Évènemment à venir</h5>
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



  </div>

</div>

<div class="description">
  <!-- Description -->
  Incenderat autem audaces usque ad insaniam homines ad haec, quae nefariis egere conatibus, Luscus quidam curator
  urbis subito visus: eosque ut heiulans baiolorum praecentor ad expediendum quod orsi sunt incitans vocibus crebris.
  qui haut longe postea ideo vivus exustus est.
  Rogatus ad ultimum admissusque in consistorium ambage nulla praegressa inconsiderate et leviter proficiscere inquit
  ut praeceptum est, Caesar sciens quod si cessaveris, et tuas et palatii tui auferri iubebo prope diem annonas. hocque
  solo contumaciter dicto subiratus abscessit nec in conspectum eius postea venit saepius arcessitus.
  Quare talis improborum consensio non modo excusatione amicitiae tegenda non est sed potius supplicio omni vindicanda
  est, ut ne quis concessum putet amicum vel bellum patriae inferentem sequi; quod quidem, ut res ire coepit, haud scio
  an aliquando futurum sit. Mihi autem non minori curae est, qualis res publica post mortem meam futura, quam qualis
  hodie sit.

</div>


@stop