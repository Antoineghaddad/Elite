<?php

namespace App\Http\Controllers;
use App\Therapy;

use Illuminate\Http\Request;

class YogaCountController extends Controller
{
    public function yoga1(){
        return Therapy::where('type', 'Yin Yoga')->get(); 
    }

    public function yoga2(){
        return Therapy::where('type', 'Hatha Yoga')->get(); 
    }

    public function yoga3(){
        return Therapy::where('type', 'Vinyasa Yoga')->get(); 
    }

    public function yoga4(){
        return Therapy::where('type', 'Kundalini Yoga')->get(); 
    }
}
