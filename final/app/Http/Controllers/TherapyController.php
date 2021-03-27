<?php

namespace App\Http\Controllers;
use App\Therapy;
use App\Http\Requests\TherapyRequest;
use Illuminate\Http\Request;

class TherapyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $therapy = Therapy::with('therapist')->get();
        if($therapy){
            return response()->json([
                'therapy' => $therapy
            ]);
        }
        return response()->json([
            'message' => 'Couldn\'t fetch data'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TherapyRequest $request)
    {
        $data = $request->all();
        $therapy = new Therapy;
        $therapy->fill($data);
        if($data['image'] === "empty"){
            unset($data['image']);
       }else{
           $therapy->image = custom_image($request);
       }
         $therapy->save();
        if($therapy){
            return response()->json([
                'therapy' => $therapy
            ],200);
        }
        return response()->json([
            'message' => 'couldn\'t store data'
        ],401);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TherapyRequest $request, $id)
    {
        $data = $request->all();
        $therapy = Therapy::where('id' , $id)->first();
        if(!$data['image'] === 'empty'){
            unset($data['image']);
        }else{
            $therapy->update($data);
           $therapy->image = custom_image($request);
        }
        $therapy->save();
        if($therapy){
            return response()->json([
                'therapy' => $therapy
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
        $therapy = Therapy::where('id' , $id)->delete();
        if($therapy){
            return response()->json([
                'message' => 'Success'
            ]);
        }
        return response()->json([
            'message' => 'couldn\'t delete data'
        ]);
    }
}
