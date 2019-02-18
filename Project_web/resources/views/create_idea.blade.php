@extends('master')
<!-- Récupération du master -->

@section('content')
<!-- Modification du content -->
@php
$userId = Auth::id();
@endphp
<div class="row">
    <div class="col-md-12">
        <br />
        <h3 aling="center"> Proposer une idée</h3>
        <br />
        <form method="post" action="{{url('/store_idea')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group" align='center'>
                <input type="text" style="width:600px; height:100px" name="idea_description" class="form-control" placeholder="Description de l'idée" />
            </div>
        </form>
    </div>
</div>

@stop