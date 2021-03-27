<?php

namespace App\Http\Controllers;
use App\Review;

use Illuminate\Http\Request;

class ReviewsCountController extends Controller
{
    public function countOf5(){
        return Review::where('rate', 5)->count(); 
    }

    public function countOf4(){
        return Review::where('rate', 4)->count(); 
    }

    public function countOf3(){
        return Review::where('rate', 3)->count(); 
    }

    public function countOf2(){
        return Review::where('rate', 2)->count(); 
    }

    public function countOf1(){
        return Review::where('rate', 1)->count(); 
    }
}
