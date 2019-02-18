@extends('master')
<!-- Récupération du master -->

@section('content')
<!-- Modification du content -->
<div class="row">
    <div class="col-md-12">
        <br />
        <h3 aling="center"> Ajouter un produit</h3>
        <br />
        <form method="post" id="form1" action="{{url('/store_article')}}" enctype="multipart/form-data" align='center'>
            @csrf
            <div class="form-group" align='center'>
                <input type="text" name="product_name" style="width:600px; height:100px" class="form-control" placeholder="Nom du produit" />
            </div>
            <div class="form-group" align='center'>
                <input type="text" name="product_description" style="width:600px; height:100px" class="form-control" placeholder="Description du produit" />
            </div>
            <div class="form-group" align='center'>
                <input type="text" name="product_price" style="width:600px; height:100px" class="form-control" placeholder="Prix du produit" />
            </div>
            Photo de l'article :
            <input type="file" name="image" id="fileToUpload" accept="image/*">
            <br />
            <br />
        </form>
        <button type="submit" form="form1" value="Submit">Submit</button>
    </div>
</div>

@stop