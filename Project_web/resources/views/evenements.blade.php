@extends('master')
<!-- Récupération du master -->

@section('content')
<!-- Modification du content -->
<main role="main">
        <div class="album py-5 ">
            <div class="container">
                <div class="row">
                    @php
                    $json = json_decode(file_get_contents('http://localhost:3000/events'), true);
                    // Récupération de données via l'API
                    foreach (array_reverse($json) as $EventID => $id) {
                    // Pour chaque évènement, création d'une carte
                        if($id['EventDate'] > date("Y-m-d")){
                            echo '<div class="card" style="width: 18rem;">
                              
                                <img class="card-img-top" src=" ' . $id['EventImage']. ' " alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">' . $id['EventDescription'] . '</p>
                                    <a class="card-text">' . $id['EventDate'] . '</a>

                                </div>
                            </div>';
                        }
                    }
                    @endphp
                </div>
            </div>
        </div>
    </main>
@stop