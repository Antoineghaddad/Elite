<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    protected $table = 'workouts';

    protected $fillable = [
        'type' , 'title' , 'image'  , 'price' , 'description' , 'trainer_id'
    ];

    public function trainer(){
        return $this->belongsTo(Trainer::class);
    }

    public function userworkout(){
        return $this->belongsTo(UserWorkout::class ,'id' ,'workout_id' );
    }
}
