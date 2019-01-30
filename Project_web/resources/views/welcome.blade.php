@extends('master')
<!-- Récupération du master -->

@section('content')
<!-- Modification du content -->
<div class="titlepage">
  Bienvenue
  <!-- Titre de la page -->
</div>

<div>

  <div id="carousel" class="carousel slide sizecarousel" data-ride="carousel" data-interval="2200">
    <!-- Caroussel changeant entre les 2 produits les plus vendus et l'évènement du mois-->


    <div class="carousel-inner">
      

      <div class="carousel-item active">
        <img class="block w-50" src="{{ URL::to('/images/pull2.jpg') }}" alt="Second slide">
        <h5 class="descriptionC">Venez voir notre boutique de goodies</h5>
      </div>
      <div class="carousel-item">
        <img class="block w-50" src="{{ URL::to('/images/stylo.jpg') }}" alt="Third slide">
        <h5 class="descriptionC">Venez voir notre boutique de goodies</h5>
      </div>

      <div class="carousel-item">
        <div class="container">
          <div class="row">
            @php
            $json = json_decode(file_get_contents('http://localhost:3000/events'), true);
            $count = 0;
            foreach (array_reverse($json) as $EventID => $id) {
              if($count <= 2){
                $count = $count + 1;
                if($id['EventDate'] > date("Y-m-d")){
                  echo '<div class="card mx-auto" style="width: 18rem;">
                          <div class="card-body">
                            <img class="card-img-top" src="' . $id['EventImage'] . '"  alt="Card image cap"></img>
                          </div>
                          <div class="card-body">
                            <p class="card-text">' . $id['EventDescription'] . '</p>
                            <a class="card-text">' . $id['EventDate'] . '</a>
                          </div>
                        </div>';
                }
              }
            }
            @endphp
          </div>
        </div>
          <h5 class="descriptionC">Évènement à venir</h5>
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