<?php

namespace App\Http\Controllers;
use App\Http\Requests\ChallengeRequest;
use App\Challenge;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $challenge = Challenge::all();
        if($challenge){
            return response()->json([
                'challenge' => $challenge
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
    public function store(ChallengeRequest $request)
    {
        $data = $request->all();
        $challenge = new Challenge;
        $challenge->fill($data);
        if(!$data['image1'] === 'empty'){
            unset($data['image1']);
        }else{
            $challenge->update($data);
           $challenge->image1 = custom_image1($request);
        }
        if(!$data['image2'] === 'empty'){
            unset($data['image2']);
        }else{
            $challenge->update($data);
           $challenge->image2 = custom_image2($request);
        }
        if(!$data['image3'] === 'empty'){
            unset($data['image3']);
        }else{
            $challenge->update($data);
           $challenge->image3 = custom_image3($request);
        }
        if(!$data['image4'] === 'empty'){
            unset($data['image4']);
        }else{
            $challenge->update($data);
           $challenge->image4 = custom_image4($request);
        }
        if(!$data['image5'] === 'empty'){
            unset($data['image5']);
        }else{
            $challenge->update($data);
           $challenge->image5 = custom_image5($request);
        }
        if(!$data['image6'] === 'empty'){
            unset($data['image6']);
        }else{
            $challenge->update($data);
           $challenge->image6 = custom_image6($request);
        }
        $challenge->save();
        if($challenge){
            return response()->json([
                'challenge' => $challenge
            ],200);
        }
        return response()->json([
            'message' => 'couldn\'t store data'
        ],401);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function show(Challenge $challenge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function edit(Challenge $challenge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function update(ChallengeRequest $request, Challenge $challenge)
    {
        $data = $request->all();
        $challenge = Challenge::where('id' , $id)->first();
        if(!$data['image1'] === 'empty'){
            unset($data['image1']);
        }else{
            $challenge->update($data);
           $challenge->image1 = custom_image($request);
        }
        if(!$data['image2'] === 'empty'){
            unset($data['image2']);
        }else{
            $challenge->update($data);
           $challenge->image2 = custom_image($request);
        }
        if(!$data['image3'] === 'empty'){
            unset($data['image3']);
        }else{
            $challenge->update($data);
           $challenge->image3 = custom_image($request);
        }
        if(!$data['image4'] === 'empty'){
            unset($data['image4']);
        }else{
            $challenge->update($data);
           $challenge->image4 = custom_image($request);
        }
        if(!$data['image5'] === 'empty'){
            unset($data['image5']);
        }else{
            $challenge->update($data);
           $challenge->image5 = custom_image($request);
        }
        if(!$data['image6'] === 'empty'){
            unset($data['image6']);
        }else{
            $challenge->update($data);
           $challenge->image6 = custom_image($request);
        }
        $challenge->save();
        if($challenge){
            return response()->json([
                'challenge' => $challenge
            ],200);
        }
        return response()->json([
            'message' => 'couldn\'t update data'
        ],401);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Challenge  $challenge
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $challenge = Challenge::where('id' , $id)->delete();
        if($challenge){
            return response()->json([
                'message' => 'Success'
            ]);
        }
        return response()->json([
            'message' => 'couldn\'t delete data'
        ]);
    }
}
