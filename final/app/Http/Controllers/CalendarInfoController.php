<?php

namespace App\Http\Controllers;

use App\CalendarInfo;
use Illuminate\Http\Request;

class CalendarInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calendarInfo = CalendarInfo::all();
        if($calendarInfo){
            return response()->json([
                'calendarInfo' => $calendarInfo
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
        $calendarInfo = new CalendarInfo;
        $calendarInfo->fill($data);
        $calendarInfo->save();
        if($calendarInfo){
            return response()->json([
                'calendarInfo' => $calendarInfo
            ],200);
        }
        return response()->json([
            'message' => 'couldn\'t store data'
        ],401);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CalendarInfo  $calendarInfo
     * @return \Illuminate\Http\Response
     */
    public function show(CalendarInfo $calendarInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CalendarInfo  $calendarInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(CalendarInfo $calendarInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CalendarInfo  $calendarInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CalendarInfo $calendarInfo)
    {
        $data = $request->all();
        $calendarInfo = CalendarInfo::where('id' , $id)->first();
        $calendarInfo->update($data);
        $calendarInfo->save();
        if($calendarInfo){
            return response()->json([
                'calendarInfo' => $calendarInfo
            ],200);
        }
        return response()->json([
            'message' => 'couldn\'t update data'
        ],401);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CalendarInfo  $calendarInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CalendarInfo $calendarInfo)
    {
        $calendarInfo = CalendarInfo::where('id' , $id)->delete();
        if($calendarInfo){
            return response()->json([
                'message' => 'Success'
            ]);
        }
        return response()->json([
            'message' => 'couldn\'t delete data'
        ]);
    }
}
