<?php

namespace App\Http\Controllers;
use App\Workout;
use Illuminate\Http\Request;

class WorkoutCountController extends Controller
{
    public function fitnessCount(){
        return Workout::where('type', 'Fitness')->count(); 
    }

    public function weightsCount(){
        return Workout::where('type', 'weights')->count(); 
    }

    public function fitnessCount1(){
        return Workout::where('type', 'Fitness')->get(); 
    }

    public function weightsCount1(){
        return Workout::where('type', 'weights')->get(); 
    }


  
}
