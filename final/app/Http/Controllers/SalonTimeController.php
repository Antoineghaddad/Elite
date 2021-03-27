<?php

namespace App\Http\Controllers;
use App\UserSalon;
use Illuminate\Http\Request;

class SalonTimeController extends Controller
{
    public function monday(){
        return UserSalon::where('day', 'Monday')->get(['time','salon_id']); 
    }
    public function tuesday(){
        return UserSalon::where('day', 'Tuesday')->get(['time','salon_id']); 
    }
    public function wednesday(){
        return UserSalon::where('day', 'Wednesday')->get(['time','salon_id']); 
    }
    public function thursday(){
        return UserSalon::where('day', 'Thursday')->get(['time','salon_id']); 
    }
    public function friday(){
        return UserSalon::where('day', 'Friday')->get(['time','salon_id']); 
    }
    public function saturday(){
        return UserSalon::where('day', 'Saturday')->get(['time','salon_id']); 
    }
    public function sunday(){
        return UserSalon::where('day', 'Sunday')->get(['time','salon_id']); 
    }
}
