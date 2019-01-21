@extends('master')

@section('header')
test header
<img src="{{ URL::to('/images/oui.jpg') }}">
@stop

@section('title')
BDE Strasbourg
<img src="{{ URL::to('/images/oui.jpg') }}">
@stop

@section('footer')
test footer
<img src="{{ URL::to('/images/oui.jpg') }}">
@stop