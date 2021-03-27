<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserWorkout extends Model
{
    protected $table = 'user_workouts';

    protected $fillable = [
        'user_id' , 'workout_id' , 'day' , 'time'
    ];

    public function workout(){
        return $this->belongsTo(Workout::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
