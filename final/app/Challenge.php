<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    protected $table = 'challenge';

    protected $fillable = [
      'day' , 'move1' , 'reps1' , 'image1' , 'move2' ,'reps2' , 'image2' , 'move3' , 'reps3' , 'image3' , 'move4' , 'reps4' , 'image4' , 'move5' , 'reps5' , 'image5' , 'move6' , 'reps6' , 'image6'
    ];
}
