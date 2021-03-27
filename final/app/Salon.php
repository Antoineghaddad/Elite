<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    protected $table = 'salon';

    protected $fillable = [
       'title', 'image' , 'description' , 'price'
    ];
}
