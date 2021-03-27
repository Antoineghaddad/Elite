<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Massager extends Model
{
    protected $table = 'massager';

    protected $fillable = [
        'fullname' , 'image' , 'description' , 'certification'
    ];
}
