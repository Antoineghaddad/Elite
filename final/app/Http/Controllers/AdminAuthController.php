<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\AdminLoginRequest;


use App\Admin;
use App\Helpers\Helpers;




class AdminAuthController extends Controller
{
    /**
     * Register a newly created resource in storage.
     *
     * @param  \Illuminate\Http\AdminRequest  $request
     * @return \Illuminate\Http\AdminResponse
     */


  
    public function register(AdminRequest $request)
    {
        $data = $request->all();
        if($data['image'] === 'empty'){
            unset($data['image']);
       }else{
        $image = $request->image;
        $name = time().'_' . $image->getClientOriginalName();
        $filePath = $request->file('image')->storeAs('', $name, 'public');
        $data['image'] = $name;  
       }
        Admin::create($data);
        
        return response()->json('Successfully added');
       
    }

    /**
     * Login to an existing resource in storage.
     *
     * @return \Illuminate\Http\AdminLoginRequest
     */
    public function login(AdminLoginRequest $request)
    {
        $credentials = request(['username', 'password']);

        if (! $token = auth('admin')->attempt($credentials)) {
            return response()->json(['error' => $this->respondWithToken($token)], 401);
        }else{
           return $this->respondWithToken($token);
        }
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Admin Successfully logged out']);
    }

    /**
     * Update Password for each Admin 
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */

    public function updatePassword(Request $request , $id){
        $data = $request->all();
        $adminsUpdatePass = Admin::where('id' , $id)->first();
        $adminsUpdatePass->password = $data['password'];
        $adminsUpdatePass->update($data);
        $adminsUpdatePass->save();
   
        return response()->json('Password successfully updated');
    }




     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected function respondWithToken($token)
    {
        $admin = auth('admin')->user();
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth()->factory()->getTTL()*60,
            'admin' => $admin,
        ]);
    }
}
