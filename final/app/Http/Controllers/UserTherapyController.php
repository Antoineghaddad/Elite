<?php

namespace App\Http\Controllers;

use App\UserTherapy;
use Illuminate\Http\Request;

class UserTherapyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userTherapy = UserTherapy::with('user')->get();
        if($userTherapy){
            return response()->json([
                'userTherapy' => $userTherapy
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
        $userTherapy = new UserTherapy;
        $userTherapy->fill($data);
        $userTherapy->save();
        if($userTherapy){
            return response()->json([
                'userTherapy' => $userTherapy
            ],200);
        }
        return response()->json([
            'message' => 'couldn\'t store data'
        ],401);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserTherapy  $userTherapy
     * @return \Illuminate\Http\Response
     */
    public function show(UserTherapy $userTherapy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserTherapy  $userTherapy
     * @return \Illuminate\Http\Response
     */
    public function edit(UserTherapy $userTherapy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserTherapy  $userTherapy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserTherapy $userTherapy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserTherapy  $userTherapy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userTherapy = UserTherapy::where('id' , $id)->delete();
        if($userTherapy){
            return response()->json([
                'message' => 'Success'
            ]);
        }
        return response()->json([
            'message' => 'couldn\'t delete data'
        ]);
    }
}
