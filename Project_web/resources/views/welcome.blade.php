@extends('master')

@section('header')

<img src="{{ URL::to('/images/logo.png') }} ">
   BUREAU DES ELEVES CESI BORDEAUX
@stop

@section('navbar')
<a class="navbar-brand text" href="#" > BDE CESI BORDEAUX</a>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text" href="#">Événement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text" href="#">Boite à idées</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text" href="#">Boutique</a>
        </li>
      </ul>
      
@stop

@section('title')
BDE Strasbourg
<img src="{{ URL::to('/images/oui.jpg') }}">
@stop

@section('footer')
test footer
<img src="{{ URL::to('/images/oui.jpg') }}">
@stop