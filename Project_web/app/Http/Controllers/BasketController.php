<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Basket;
use App\Product;
use Mail;
use App\Mail\Contact;

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
      
      Mail::to('yannis.taibi@viacesi.fr')->send(new Contact);

      
      return view('cart', ['baskets' => $basket]);
   }
}
