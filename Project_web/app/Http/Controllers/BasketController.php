<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Basket;

class BasketController extends Controller
{
   public function index(){
      $basket = Basket::all();
      return view('cart', ['baskets' => $basket]);
   }
}
