<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $table = 'trainer';

    protected $fillable = [
        'fullname' , 'image' , 'description' , 'certification'
    ];
}
