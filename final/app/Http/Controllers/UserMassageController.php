<?php

namespace App\Http\Controllers;

use App\UserMassage;
use Illuminate\Http\Request;

class UserMassageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userMassage = UserMassage::with('user')->get();
        if($userMassage){
            return response()->json([
                'userMassage' => $userMassage
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
    public function store(Request $request)
    {
        $data = $request->all();
        $userMassage = new UserMassage;
        $userMassage->fill($data);
        $userMassage->save();
        if($userMassage){
            return response()->json([
                'userMassage' => $userMassage
            ],200);
        }
        return response()->json([
            'message' => 'couldn\'t store data'
        ],401);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserMassage  $userMassage
     * @return \Illuminate\Http\Response
     */
    public function show(UserMassage $userMassage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserMassage  $userMassage
     * @return \Illuminate\Http\Response
     */
    public function edit(UserMassage $userMassage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserMassage  $userMassage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserMassage $userMassage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserMassage  $userMassage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userMassage = UserMassage::where('id' , $id)->delete();
        if($userMassage){
            return response()->json([
                'message' => 'Success'
            ]);
        }
        return response()->json([
            'message' => 'couldn\'t delete data'
        ]);
    }
}
