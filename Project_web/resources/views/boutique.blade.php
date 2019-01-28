@extends('master')

@section('content')



<div class="container">
            <div class="titlepage content">
                <!-- Titre de la page -->
                Boutique 
            </div>
            <main role="main">
                <div class="album py-5 ">
                    <div class="container">
                        <div class="row">

                            @php
                            // Récupération du fichier json 
                            $json = json_decode(file_get_contents('http://localhost:3000/products'), true)
                            
                           // $image = {{$id['ProductImage']}};
                           // $lien = ("/images/" + $image + ".png");
                            
                            @endphp 

                            @foreach ($json as $ProductID => $id)
                              
                            <!-- Affichage des produits en fonctione de la base de données -->
                             <div class="col-10 col-md-4 col-sm-6">
                                <div class="card mb-4 box-shadow">
                                    <!-- Affichage de l'image -->
                                    <h5 class="" id="exampleModalLongTitle">{{$id['ProductName']}}</h5>
                                    <img class="card-img-top" src="{{$id['ProductImage']}} " alt="Card image cap">
                                    <div class="card-body">
                                        <!-- Récupération et affichage de la description -->
                                        <p class="card-text" > {{$id['ProductDescription']}}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">

                                                <!-- Bouton d'achat qui ajoute au panier -->
                                                <button type="button" class="btn btn  btn-outline-secondary" data-toggle="modal" data-target="#popup">Achat</button> 
                                                <!-- Bouton permettant de signaler un produit -->
                                                <button type="button" class="btn btn  btn-outline-secondary" data-toggle="modal" data-target="#popup">Signaler  </button> 

                                            </div>
                                            <!-- Récupération et affichage du prix du produit -->
                                            <small class="text-muted"> {{$id['ProductPrice']}}€</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                        </div>
                    </div>
                </div>
          
            </main>
          
    <!-- Bootstrap core JavaScript
    ================================================== -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>

</div>
@stop

