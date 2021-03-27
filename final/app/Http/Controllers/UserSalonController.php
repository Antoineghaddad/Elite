<?php

namespace App\Http\Controllers;

use App\UserSalon;
use Illuminate\Http\Request;

class UserSalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userSalon = UserSalon::with('user')->get();
        if($userSalon){
            return response()->json([
                'userSalon' => $userSalon
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
        $userSalon = new UserSalon;
        $userSalon->fill($data);
        $userSalon->save();
        if($userSalon){
            return response()->json([
                'userSalon' => $userSalon
            ],200);
        }
        return response()->json([
            'message' => 'couldn\'t store data'
        ],401);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserSalon  $userSalon
     * @return \Illuminate\Http\Response
     */
    public function show(UserSalon $userSalon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserSalon  $userSalon
     * @return \Illuminate\Http\Response
     */
    public function edit(UserSalon $userSalon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserSalon  $userSalon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserSalon $userSalon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserSalon  $userSalon
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userSalon = UserSalon::where('id' , $id)->delete();
        if($userSalon){
            return response()->json([
                'message' => 'Success'
            ]);
        }
        return response()->json([
            'message' => 'couldn\'t delete data'
        ]);
    }
}
