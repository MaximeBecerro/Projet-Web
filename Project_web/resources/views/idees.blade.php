@extends('master') <!-- Récupération du master -->

@section('content') <!-- Modification du content -->

<main role="main">     
    <div class="album py-5 ">
        <div class="container">
            <div class="row">
                    @php
                        $json = json_decode(file_get_contents('http://localhost:3000/ideas'), true);  
                        // Récupération de données via l'API
                        foreach (array_reverse($json) as $IdeaContent => $id) { 
                            // Pour chaque idée, création d'une carte
                            echo '<div class="card" style="width: 18rem;">
                                <div class="card-body">
                                <p class="card-text">' . $id['IdeaContent'] . '</p>
                                <a href="#" class="card-link">' . $id['id'] . '</a>
                                <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>';
                        }
                    @endphp
            </div>
        </div>
    </div>
</main>
@stop