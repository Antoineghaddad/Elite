<?php

namespace App\Http\Controllers;
use App\UserMassage;
use Illuminate\Http\Request;

class MassageTimeController extends Controller
{
    public function monday(){
        return UserMassage::where('day', 'Monday')->get(['time','massage_id']); 
    }
    public function tuesday(){
        return UserMassage::where('day', 'Tuesday')->get(['time','massage_id']); 
    }
    public function wednesday(){
        return UserMassage::where('day', 'Wednesday')->get(['time','massage_id']); 
    }
    public function thursday(){
        return UserMassage::where('day', 'Thursday')->get(['time','massage_id']); 
    }
    public function friday(){
        return UserMassage::where('day', 'Friday')->get(['time','massage_id']); 
    }
    public function saturday(){
        return UserMassage::where('day', 'Saturday')->get(['time','massage_id']); 
    }
    public function sunday(){
        return UserMassage::where('day', 'Sunday')->get(['time','massage_id']); 
    }


}
