<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public $timestamps = false;
    protected $fillable = [
        'ProductID', 'ProductName', 'ProductPrice', 'ProductDescription', 'ProductImage',
    ];
}