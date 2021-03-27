<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Http\Request;
use App\Helpers\Helpers;
use App\Http\Requests\AdminUpRequest;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::all();
        if($admin){
            return response()->json([
                'admin' => $admin
            ]);
        }
        return response()->json([
            'message' => 'Couldn\'t fetch data'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminUpRequest $request, $id)
    {
        $data = $request->all();  //dd is to dump and die to print
        $admin = Admin::where('id' , $id)->first();
        $admin->update($data);
        if($data['image'] === 'empty' ){
            unset($data['image']);
            $admin->update($data);
            $admin->save();
        }else{
           $admin->update($data);
           $admin->image = custom_image($request);
           $admin->save();
        }
        $admin->save();
         
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
        $admin = Admin::where('id' , $id)->delete();
        if($admin){
            if($admin){
                return response()->json([
                    'message' => 'Admin deleted!'
  
                    ]);
            }
            return response()->json([
                'message' => 'Couldn\'t delete admin'
            ]);
        }
    }
 
}
