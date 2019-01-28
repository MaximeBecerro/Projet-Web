<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cart extends Controller
{
   public function requete(){
        DB::table('basket')->insert (['id' => 1, 'Quantity' => 1, 'ProductID' => 1]);
    }
}
