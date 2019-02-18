@extends('master')
<!-- Récupération du master -->

@section('content')
<!-- Modification du content -->
<div class="row">
    <div class="col-md-12">
        <br />
        <h3 aling="center"> Créer un évènement</h3>
        <br />
        <form method="post" action="{{url('/store_event')}}" enctype="multipart/form-data" align='center' id="form1">
            @csrf
            <div class="form-group" align='center'>
                <input type="text" name="event_description" style="width:600px; height:100px" class="form-control" placeholder="Description de l'évènement" />
            </div>
            Photo de l'évènement :
            <input type="file" name="image" id="fileToUpload" accept="image/*">
            <br />
            <br />
            <input type="date" name="date" id="date">
        </form>
        <button type="submit" form="form1" value="Submit">Submit</button>
    </div>
</div>

@stop