<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Basket;
use App\Product;
use Mail;

class BasketController extends Controller
{
   public function index(){
      $basket = Basket::all();
      $product = Product::all();
      $Bproduct = new Product;
    //  $Bproduct->ProductName = Product::where($product->ProductID,$basket->ProductID);
     // $basket->ProductID = $product->ProductID;
     $user = auth()->id();
     $basket->id = $user;
      return view('cart', ['baskets' => $basket]);
   }

   public function validation(){
      $basket = Basket::all();
      
      Mail::send("Validation d'achat",[],function($message){
         $message = "Validation de l'achat";
         $message->from('ced.mevel@gmail.com')
                 ->to('cedric.mevel@viacesi.fr');
      });

      
      return view('cart', ['baskets' => $basket]);
   }
}
