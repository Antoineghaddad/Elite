<?php

namespace App\Http\Controllers;

use App\UserProducts;
use Illuminate\Http\Request;

class UserProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userProduct = UserProducts::with('user' , 'product')->get();
        if($userProduct){
            return response()->json([
                'userProduct' => $userProduct
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
        // $data = $request->all();
        // $userProduct = new UserProducts;
        // $userProduct->fill($data);
        // $userProduct->save();
        // if($userProduct){
        //     return response()->json([
        //         'userProduct' => $userProduct
        //     ],200);
        // }
        // return response()->json([
        //     'message' => 'couldn\'t store data'
        // ],401);
        $Dataa = $request->all();

        foreach ( $Dataa as $data ) {
            $product = new UserProducts;
            $product->fill($Dataa);
            $product->save();
            if ( $product ) {
                return response()->json( [
                    'product' => $product
                ], 200 );
            }
            return response()->json( [
                'message' => 'couldn\'t store data'
            ], 401 );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserProducts  $userProducts
     * @return \Illuminate\Http\Response
     */
    public function show(UserProducts $userProducts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserProducts  $userProducts
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProducts $userProducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserProducts  $userProducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserProducts $userProducts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserProducts  $userProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = UserProducts::where('id' , $id)->delete();
        if($product){
            return response()->json([
                'message' => 'Success'
            ]);
        }
        return response()->json([
            'message' => 'couldn\'t delete data'
        ]);
    }
}
