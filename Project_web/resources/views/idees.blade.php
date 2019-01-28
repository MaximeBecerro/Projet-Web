@extends('master')
<!-- Récupération du master -->

@section('content')
<!-- Modification du content -->

<main role="main">
    @php
    $userId = Auth::id();
    $user = Auth::user()->roleid;
    @endphp
    @if (Auth::check())
    <form>
        <div class="col-md-24 flex-center">
            <div class="form-group">
                <label for="description"></label>
                <textarea type="text" class="form-control" id="description" rows="3" style="width: 400px;"> </textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Proposer une idée</button>
    </form>
    @endif
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
                        <a href="#" class="card-link">' . $userId . '</a>
                    </div>
                </div>';
                }
                @endphp
            </div>
        </div>
    </div>
</main>
@stop