<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserLoginRequest;
use App\User;




class UserController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userinfo(Request $request)
    {
        // $user = User::with('workout' , 'massage' , 'yoga')->get();
        // // $user = User::all();
        // return response()->json($user);
        $data = $request->all();
        $user = $data['id'];
        return User::where('id' , $user)->with('workout','product' , 'massage' , 'yoga' , 'salon')->get();
    }


    public function profile()
    {
        return response()->json(auth()->user());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(UserRequest $request)
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
        User::create($data);
        
        return response()->json('Successfully added');
    }
  
     /**
     * select from a list of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(UserLoginRequest $request)
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['errors' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

     /**
     * select from a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

       /**
     * removing token from a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected function respondWithToken($token)
    {
        $user= auth()->user();
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth()->factory()->getTTL() * 60*24*7,
            'user' => $user,
        ]);
    }

    
}