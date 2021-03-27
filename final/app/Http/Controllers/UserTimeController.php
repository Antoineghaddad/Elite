<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserWorkout;

class UserTimeController extends Controller
{

    public function monday(){
        return UserWorkout::where('day', 'Monday')->with('workout')->get(['time','workout_id']); 
    }
    public function tuesday(){
        return UserWorkout::where('day', 'Tuesday')->with('workout')->get(['time','workout_id']); 
    }
    public function wednesday(){
        return UserWorkout::where('day', 'Wednesday')->with('workout')->get(['time','workout_id']); 
    }
    public function thursday(){
        return UserWorkout::where('day', 'Thursday')->with('workout')->get(['time','workout_id']); 
    }
    public function friday(){
        return UserWorkout::where('day', 'Friday')->with('workout')->get(['time','workout_id']); 
    }
    public function saturday(){
        return UserWorkout::where('day', 'Saturday')->with('workout')->get(['time','workout_id']); 
    }
    public function sunday(){
        return UserWorkout::where('day', 'Sunday')->with('workout')->get(['time','workout_id']); 
    }

  
}
