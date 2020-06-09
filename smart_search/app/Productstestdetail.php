<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productstestdetail extends Model
{
    //
    protected $fillable = [
        'id',
        'product_id',
        'handle',
        'image'
    ];
}
