<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'home';
    
    protected $fillable = [
        'missions', 'about_us'
    ];
}
