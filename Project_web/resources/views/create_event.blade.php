@extends('master')
<!-- Récupération du master -->

@section('content')
<!-- Modification du content -->
<div class="row">
    <div class="col-md-12">
        <br />
        <h3 aling="center"> Créer un évènement</h3>
        <br />
        <form method="post" action="{{url('/store_event')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" name="event_description" class="form-control" placeholder="Description de l'évènement" />
            </div>
            Photo de l'évènement :
            <input type="file" name="image" id="fileToUpload" accept="image/*">
            <br />
            <br />
            <input type="date" name="date" id="date">
        </form>
    </div>
</div>

@stop