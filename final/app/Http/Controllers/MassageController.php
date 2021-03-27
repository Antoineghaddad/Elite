<?php

namespace App\Http\Controllers;
use App\Massage;
use Illuminate\Http\Request;
use App\Http\Requests\MassageRequest;


class MassageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $massage = Massage::with('massager')->get();
        if($massage){
            return response()->json([
                'massage' => $massage
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
    public function store(MassageRequest $request)
    {
        $data = $request->all();
        $massage = new Massage;
        $massage->fill($data);
        if($data['image'] === "empty"){
            unset($data['image']);
       }else{
           $massage->image = custom_image($request);
       }
         $massage->save();
        if($massage){
            return response()->json([
                'massage' => $massage
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
    public function update(MassageRequest $request, $id)
    {
        $data = $request->all();
        $massage = Massage::where('id' , $id)->first();
        $massage->update($data);
        if($data['image'] === null){
            unset($data['image']);
            $massage->update($data);
        }else{
           $massage->image = custom_image($request);
           $massage->save();
        }
        $massage->save();
        if($massage){
            return response()->json([
                'massage' => $massage
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
        $massage = Massage::where('id' , $id)->delete();
        if($massage){
            return response()->json([
                'message' => 'Success'
            ]);
        }
        return response()->json([
            'message' => 'couldn\'t delete data'
        ]);
    }
}
