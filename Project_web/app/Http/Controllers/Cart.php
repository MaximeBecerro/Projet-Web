<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cart extends Controller
{
   public function addToCart($id,$ProductID){
        DB::table('basket')->insert (['id' => $id, 'Quantity' => 1, 'ProductID' => $ProductID]);
    }
}
