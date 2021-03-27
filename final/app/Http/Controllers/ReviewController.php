<?php

namespace App\Http\Controllers;
use App\Review;
use App\Http\Requests\ReviewsRequest;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $review = Review::all();
        if($review){
            return response()->json([
                'review' => $review
            ]);
        }
        return response()->json([
            'message' => 'Couldn\'t fetch data'
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $review = new Review;
        $review->fill($data);
        $review->save();
        if($review){
            return response()->json([
                'review' => $review
            ],200);
        }
        return response()->json([
            'message' => 'couldn\'t store data'
        ],401);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $review = Review::where('id' , $id)->first();
        $review->update($data);
        $review->save();
        if($review){
            return response()->json([
                'review' => $review
            ],200);
        }
        return response()->json([
            'message' => 'couldn\'t update data'
        ],401);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::where('id' , $id)->delete();
        if($review){
            return response()->json([
                'message' => 'Success'
            ]);
        }
        return response()->json([
            'message' => 'couldn\'t delete data'
        ]);
    
    }
}
