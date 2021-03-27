<?php

namespace App\Http\Controllers;

use App\UserWorkout;
use Illuminate\Http\Request;

class UserWorkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $data = $request->all();
        // $user = $data['user_id'];
        // return UserWorkout::where('user_id' , $user)->with('user')->get();
        // // $userWorkout = UserWorkout::all();
        // // if($userWorkout){
        // //     return response()->json([
        // //         'userWorkout' => $userWorkout
        // //     ]);
        // // }
        // // return response()->json([
        // //     'message' => 'Couldn\'t fetch data'
        // // ]);
        $userWorkout = UserWorkout::with('user')->get();
        if($userWorkout){
            return response()->json([
                'userWorkout' => $userWorkout
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
        $userWorkout = new UserWorkout;
        $userWorkout->fill($data);
        $userWorkout->save();
        if($userWorkout){
            return response()->json([
                'userWorkout' => $userWorkout
            ],200);
        }
        return response()->json([
            'message' => 'couldn\'t store data'
        ],401);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserWorkout  $userWorkout
     * @return \Illuminate\Http\Response
     */
    public function show(UserWorkout $userWorkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserWorkout  $userWorkout
     * @return \Illuminate\Http\Response
     */
    public function edit(UserWorkout $userWorkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserWorkout  $userWorkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserWorkout $userWorkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserWorkout  $userWorkout
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userWorkout = UserWorkout::where('id' , $id)->delete();
        if($userWorkout){
            return response()->json([
                'message' => 'Success'
            ]);
        }
        return response()->json([
            'message' => 'couldn\'t delete data'
        ]);
    }
}
