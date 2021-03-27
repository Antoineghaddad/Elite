<?php

namespace App\Http\Controllers;

use App\Subscribers;
use Illuminate\Http\Request;
use App\Http\Requests\SubscribersRequest;


class SubscribersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers = Subscribers::all();
        if($subscribers){
            return response()->json([
                'subscribers' => $subscribers
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
    public function store(SubscribersRequest $request)
    {
        $data = $request->all();
        $subscribers = new Subscribers;
        $subscribers->fill($data);
        $subscribers->save();
        if($subscribers){
            return response()->json([
                'subscribers' => $subscribers
            ],200);
        }
        return response()->json([
            'message' => 'couldn\'t store data'
        ],401);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function show(Subscribers $subscribers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscribers $subscribers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscribers $subscribers)
    {
        $data = $request->all();
        $subscribers = Subscribers::where('id' , $id)->first();
        $subscribers->update($data);
        $subscribers->save();
        if($subscribers){
            return response()->json([
                'subscribers' => $subscribers
            ],200);
        }
        return response()->json([
            'message' => 'couldn\'t update data'
        ],401);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscribers  $subscribers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscribers $subscribers)
    {
        $subscribers = Subscribers::where('id' , $id)->delete();
        if($subscribers){
            return response()->json([
                'message' => 'Success'
            ]);
        }
        return response()->json([
            'message' => 'couldn\'t delete data'
        ]);
    }
}
