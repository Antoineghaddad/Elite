<?php

namespace App\Http\Controllers;
use App\Trainer;
use Illuminate\Http\Request;
use App\Http\Requests\TrainerRequest;


class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainer = Trainer::all();
        if($trainer){
            return response()->json([
                'trainer' => $trainer
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
    public function store(TrainerRequest $request)
    {
        $data = $request->all();
        $trainer = new Trainer;
        $trainer->fill($data);
        if($data['image'] === "empty"){
            unset($data['image']);
       }else{
           $trainer->image = custom_image($request);
       }
         $trainer->save();
        if($trainer){
            return response()->json([
                'trainer' => $trainer
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
    public function update(TrainerRequest $request, $id)
    {
        $data = $request->all();
        $trainer = Trainer::where('id' , $id)->first();
        $trainer->update($data);
        if($data['image'] === 'empty'){
            unset($data['image']);
            $trainer->update($data);
        }else{
           $trainer->image = custom_image($request);
        }
       $trainer->save();
        if($trainer){
            return response()->json([
                'trainer' => $trainer
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
        $trainer = Trainer::where('id' , $id)->delete();
        if($trainer){
            return response()->json([
                'message' => 'Success'
            ]);
        }
        return response()->json([
            'message' => 'couldn\'t delete data'
        ]);
    }
}
