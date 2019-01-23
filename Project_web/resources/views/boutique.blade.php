@extends('master')

@section('content')

<body>
            <div class="titlepage">
                Boutique
            </div>
          
              <main role="main">
          
                <div class="album py-5 ">

                  <div class="container">
                    <div class="row">

                      <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                          <img class="card-img-top" src="{{ URL::to('/images/logo.png') }}" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text">Exemple de produit à acheter</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn  btn-outline-secondary" data-toggle="modal" data-target="#popup">View</button> 
                                   
                                    <!-- Modal -->
                                    <div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="popupTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                        <div class="col-md-4"> <img src="{{ URL::to('/images/logo.png') }} "></div>
                                                        <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
                                                        </div>
                                                        <div class="row">
                                                        <div class="col-md-3 ml-auto">.col-md-3 .ml-auto</div>
                                                        <div class="col-md-2 ml-auto">.col-md-2 .ml-auto</div>
                                                        </div>
                                                        <div class="row">
                                                        <div class="col-md-6 ml-auto">.col-md-6 .ml-auto</div>
                                                        </div>
                                                        <div class="row">
                                                        <div class="col-sm-9">
                                                            Level 1: .col-sm-9
                                                            <div class="row">
                                                            <div class="col-8 col-sm-6">
                                                                Level 2: .col-8 .col-sm-6
                                                            </div>
                                                            <div class="col-4 col-sm-6">
                                                                Level 2: .col-4 .col-sm-6
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Achat</button>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>

                              </div>
                              <small class="text-muted">Prix : 99€</small>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                          <img class="card-img-top" src="{{ URL::to('/images/logo.png') }}" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text">Exemple de produit à acheter</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn btn-outline-secondary">View</button> 
                              </div>
                              <small class="text-muted">Prix : 99€</small>
                            </div>
                          </div>
                        </div>
                      </div>


                      <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                          <img class="card-img-top" src="{{ URL::to('/images/logo.png') }}" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text">Exemple de produit à acheter</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn btn-outline-secondary">View</button> 
                              </div>
                              <small class="text-muted">Prix : 99€</small>
                            </div>
                          </div>
                        </div>
                      </div>
          
                      <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                          <img class="card-img-top" src="{{ URL::to('/images/logo.png') }}" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text">Exemple de produit à acheter</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn btn-outline-secondary">View</button> 
                              </div>
                              <small class="text-muted">Prix : 99€</small>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                          <img class="card-img-top" src="{{ URL::to('/images/logo.png') }}" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text">Exemple de produit à acheter</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn btn-outline-secondary">View</button> 
                              </div>
                              <small class="text-muted">Prix : 99€</small>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                          <img class="card-img-top" src="{{ URL::to('/images/logo.png') }}" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text">Exemple de produit à acheter</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn btn-outline-secondary">View</button> 
                              </div>
                              <small class="text-muted">Prix : 99€</small>
                            </div>
                          </div>
                        </div>
                      </div>
          
                      <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                          <img class="card-img-top" src="{{ URL::to('/images/logo.png') }}" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text">Exemple de produit à acheter</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn btn-outline-secondary">View</button> 
                              </div>
                              <small class="text-muted">Prix : 99€</small>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                          <img class="card-img-top" src="{{ URL::to('/images/logo.png') }}" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text">Exemple de produit à acheter</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn btn-outline-secondary">View</button> 
                              </div>
                              <small class="text-muted">Prix : 99€</small>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                          <img class="card-img-top" src="{{ URL::to('/images/logo.png') }}" alt="Card image cap">
                          <div class="card-body">
                            <p class="card-text">Exemple de produit à acheter</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <button type="button" class="btn btn btn-outline-secondary">View</button> 

                              </div>
                              <small class="text-muted">Prix : 99€</small>
                            </div>
                          </div>
                        </div>
                      </div>

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
            </body>
@stop

