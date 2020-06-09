<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productstest extends Model
{
    //
    protected $fillable = [
        'id',
        'product_id',
        'title',
        'description',
        'locales',
        'shop_id'
    ];

}
