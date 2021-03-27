<?php

namespace App\Http\Controllers;
use App\UserTherapy;

use Illuminate\Http\Request;

class TherapyTimeController extends Controller
{
    public function monday(){
        return UserTherapy::where('day', 'Monday')->get(['time','therapy_id']); 
    }
    public function tuesday(){
        return UserTherapy::where('day', 'Tuesday')->get(['time','therapy_id']); 
    }
    public function wednesday(){
        return UserTherapy::where('day', 'Wednesday')->get(['time','therapy_id']); 
    }
    public function thursday(){
        return UserTherapy::where('day', 'Thursday')->get(['time','therapy_id']); 
    }
    public function friday(){
        return UserTherapy::where('day', 'Friday')->get(['time','therapy_id']); 
    }
    public function saturday(){
        return UserTherapy::where('day', 'Saturday')->get(['time','therapy_id']); 
    }
    public function sunday(){
        return UserTherapy::where('day', 'Sunday')->get(['time','therapy_id']); 
    }
}
