@extends('master')

@section('header')

<img src="{{ URL::to('/images/logo.png') }} ">
BUREAU DES ELEVE CESI 
@stop

@section('navbar')
<a class="navbar-brand" href="#">BDE CESI</a>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Liens</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Témoignages</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Références</a>
        </li>
      </ul>
      <form action="search" method="get" class="form-inline">
        <div class="input-group">
          <input type="text" name="search" class="form-control" placeholder="Je cherche...">
          <span class="input-group-btn">
            <button type="submit" class="btn btn-secondary"><span class="fa fa-search"></span> Chercher</button>
          </span>
        </div>
      </form>
@stop

@section('title')
BDE Strasbourg
<img src="{{ URL::to('/images/oui.jpg') }}">
@stop

@section('footer')
test footer
<img src="{{ URL::to('/images/oui.jpg') }}">
@stop