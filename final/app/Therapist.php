<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Therapist extends Model
{
   protected $table = 'therapist';

   protected $fillable = [
       'fullname' , 'image' , 'description' , 'certification'
   ];
}
