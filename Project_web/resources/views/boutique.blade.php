@extends('master')

@section('content')


<?php

$recuperation = file_get_contents('http://localhost:3000/products');

$productjs = json_decode($recuperation, true); 


?>


<div class="container">
            <div class="titlepage content">
                Boutique 
            </div>
          
              <main role="main">
          
                <div class="album py-5 ">

                  <div class="container">
                    <div class="row">


                  @foreach ($products as $product)
                      
                  <div class="col-10 col-md-4 col-sm-6">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top" src="{{ URL::to('/images/logo.png') }}" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text" > {{$description = $product->ProductDescription}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <button type="button" class="btn btn  btn-outline-secondary" data-toggle="modal" data-target="#popup">View</button> 
                              
                                <!-- Modal -->
                                <div class="modal fade" id="popup" tabindex="-1" role="dialog aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">{{$product->ProductName}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                    <div class="col-md-6 popupposition"> <img src="{{ URL::to('/images/oui.jpg') }} "></div>
                                                    
                                                    
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-6 ">{{$description}}</div>
                                                    </div>
                                                   
                                                </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Signaler</button>
                                                    <button type="button" class="btn btn-primary">Achat</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>

                          </div>
                          <small class="text-muted"> {{$product->ProductPrice}}€</small>
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
              <!-- Placed at the end of the document so the pages load faster -->
              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
              <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
              <script src="../../assets/js/vendor/popper.min.js"></script>
              <script src="../../dist/js/bootstrap.min.js"></script>
              <script src="../../assets/js/vendor/holder.min.js"></script>

           
</div>
@stop

