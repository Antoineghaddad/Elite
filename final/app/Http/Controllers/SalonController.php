<?php

namespace App\Http\Controllers;
use App\Salon;
use Illuminate\Http\Request;
use App\Http\Requests\SalonRequest;


class SalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salon = Salon::all();
        if($salon){
            return response()->json([
                'salon' => $salon
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
    public function store(SalonRequest $request)
    {
        $data = $request->all();
        $salon = new Salon;
        $salon->fill($data);
        if($data['image'] === "empty"){
            unset($data['image']);
       }else{
           $salon->image = custom_image($request);
       }
         $salon->save();
        if($salon){
            return response()->json([
                'salon' => $salon
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
    public function update(SalonRequest $request, $id)
    {
        $data = $request->all();  //dd is to dump and die to print
        $salon = Salon::where('id' , $id)->first();
        if($data['image'] === 'empty' ){
            unset($data['image']);
            $salon->update($data);
       }else{
           $salon->update($data);
           $salon->image = custom_image($request);
       }
         $salon->save();
         
         return response()->json('Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salon = Salon::where('id' , $id)->delete();
        if($salon){
            return response()->json([
                'message' => 'Success'
            ]);
        }
        return response()->json([
            'message' => 'couldn\'t delete data'
        ]);
    }
}
