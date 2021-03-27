<?php

namespace App\Http\Controllers;
use App\Products;

use Illuminate\Http\Request;

class CategoryCountController extends Controller
{
    public function category1(){
        return Products::where('category', 'Fitness')->get(); 
    }

    public function category2(){
        return Products::where('category', 'Wellness')->get(); 
    }

    public function category3(){
        return Products::where('category', 'Therapy')->get(); 
    }

    public function category4(){
        return Products::where('category', 'Massage')->get(); 
    }

    public function category5(){
        return Products::where('category', 'Workout')->get(); 
    }

    public function category6(){
        return Products::where('category', 'Facial')->get(); 
    }

    public function category7(){
        return Products::where('category', 'Body')->get(); 
    }

  
}
