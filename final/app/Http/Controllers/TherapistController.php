<?php

namespace App\Http\Controllers;
use App\Therapist;
use Illuminate\Http\Request;
use App\Http\Requests\TherapistRequest;


class TherapistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $therapist = Therapist::all();
        if($therapist){
            return response()->json([
                'therapist' => $therapist
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
    public function store(TherapistRequest $request)
    {
        $data = $request->all();
        $therapist = new Therapist;
        $therapist->fill($data);
        if($data['image'] === "empty"){
            unset($data['image']);
       }else{
           $therapist->image = custom_image($request);
       }
         $therapist->save();
        if($therapist){
            return response()->json([
                'therapist' => $therapist
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
    public function update(TherapistRequest $request, $id)
    {
        $data = $request->all();
        $therapist = Therapist::where('id' , $id)->first();
        if($data['image'] === 'empty'){
            unset($data['image']);
            $therapist->update($data);
        }else{
           $therapist->image = custom_image($request);
        }
       $therapist->save();
        if($therapist){
            return response()->json([
                'therapist' => $therapist
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
        $therapist = Therapist::where('id' , $id)->delete();
        if($therapist){
            return response()->json([
                'message' => 'Success'
            ]);
        }
        return response()->json([
            'message' => 'couldn\'t delete data'
        ]);
    }
}
