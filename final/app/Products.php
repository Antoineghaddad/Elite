<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name' , 'image' , 'description' , 'price' , 'category'
    ];
}
