@extends('master')
<!-- Récupération du master -->

@section('content')
<!-- Modification du content -->
test
<ul>
    @foreach ($users as $user)
    <!-- Pour chaque utilisateur -->
    <li>
        <a href="{{ url('/admin/' . $user->id)}}">
            <!-- Récupère les noms et mails des utilisateurs -->
            {{$user->name}}, {{$user->email}}

        </a>
        <a>
            <label id="BDE member" class="radio-inline"><input type="radio" name="optradio[{{$user->id}}]" checked>Membre du BDE</label>
        </a>
        <a>
            <label class="radio-inline"><input type="radio" name="optradio[{{$user->id}}]">Employé(e) du CESI</label>
        </a>
        <a>
            <label class="radio-inline"><input type="radio" name="optradio[{{$user->id}}]">Étudiant(e)</label>
        </a>
    </li>
    @endforeach
</ul>
@endsection