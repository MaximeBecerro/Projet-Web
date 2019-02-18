@php
use App\Product;    
@endphp


@extends('master')


@section('content')


<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">

        @foreach ($baskets as $basket )

		@php
		
		$message = "Validation de l'achat";
          // $product = Product::all();
       	 // $basket->ProductID = $product->ProductID;

          //$title = $product->ProductName


        @endphp

	<table id="cart" class="table table-hover table-condensed">
    				<thead>
						<tr>
						<th style="width:50%">{{$basket->ProductName}}</th>
							<th style="width:10%">Price</th>
							<th style="width:8%">Quantity</th>
							
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin">Product 1</h4>
										<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
									</div>
								</div>
							</td>
							<td data-th="Price">$1.99</td>
							<td data-th="Quantity">
								<input type="number" class="form-control text-center" value="1">
							</td>
							
							<td class="actions" data-th="">
								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>								
							</td>
						</tr>
                    </tbody>
                    
                    @endforeach

					<tfoot>
					
						<tr>
							
							<td colspan="2" class="hidden-xs"></td>
							
							<form action="/validation">
								{{ csrf_field() }}
							<td><button type="type="submit href="#" class="btn btn-success btn-block">Valider <i class="fa fa-angle-right"></i></button></td>
							</form>
						</tr>
					</tfoot>
				</table>
</div>

@stop