<?php

namespace App\Http\Controllers;
use App\Massager;
use Illuminate\Http\Request;
use App\Http\Requests\MassagerRequest;


class MassagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $massager = Massager::all();
        if($massager){
            return response()->json([
                'massager' => $massager
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
    public function store(MassagerRequest $request)
    {
        $data = $request->all();
        $massager = new Massager;
        $massager->fill($data);
        if($data['image'] === "empty"){
            unset($data['image']);
            $massager->update($data);
       }else{
           $massager->image = custom_image($request);
        }
        $massager->update($data);
        $massager->save();
        if($massager){
            return response()->json([
                'massager' => $massager
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
    public function update(MassagerRequest $request, $id)
    {
        $data = $request->all();
        $massager = Massager::where('id' , $id)->first();
        if($data['image'] === 'empty'){
            unset($data['image']);
            $massager->update($data);
        }else{
           $massager->image = custom_image($request);
        }
       $massager->save();
        if($massager){
            return response()->json([
                'massager' => $massager
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
        $massager = Massager::where('id' , $id)->delete();
        if($massager){
            return response()->json([
                'message' => 'Success'
            ]);
        }
        return response()->json([
            'message' => 'couldn\'t delete data'
        ]);
    }
}
