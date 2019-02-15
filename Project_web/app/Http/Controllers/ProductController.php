<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Basket;


class ProductController extends Controller
{
    public function display(){
        $products = Product::all();
        return view('boutique', ['products' => $products]);
    } 

    public function addToCart(Request $request, $ProdID){
       //DB::table('basket')->insert (['id' => $id, 'Quantity' => 1, 'ProductID' => $ProductID]);
        $cart = new Basket([]);
        $userd = 

        $cart = $request->input('id', 'Request');


        return $cart;
    }
}
