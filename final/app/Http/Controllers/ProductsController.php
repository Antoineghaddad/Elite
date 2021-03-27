<?php

namespace App\Http\Controllers;
use App\Products;
use Illuminate\Http\Request;
use App\Http\Requests\ProductsRequest;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Products::all();
        if($product){
            return response()->json([
                'product' => $product
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
    public function store(ProductsRequest $request)
    {

    //     $carts = $request;
    //     foreach ($carts as $cart){
    //         if($request->image){
               
    //                    $cart->image = custom_image($request);
    //                }
    //     Products::create(array($cart));
    // }
        $data = $request->all();
        $product = new Products;
        $product->fill($data);
        if($data['image'] === "empty"){
            unset($data['image']);
       }else{
           $product->image = custom_image($request);
       }
         $product->save();
        if($product){
            return response()->json([
                'product' => $product
            ],200);
        }
        return response()->json([
            'message' => 'couldn\'t store data'
        ],401);
    $Data = $request->all();

    // foreach ( $Data as $data ) {
    //     $product = new Products;
    //     $product->fill( $data );
    //     if ( $data['image'] === 'empty' ) {
    //         unset( $data['image'] );
    //     } else {
    //         $product->image = custom_image( $request );
    //     }
    //     $product->save();
    //     if ( $product ) {
    //         return response()->json( [
    //             'product' => $product
    //         ], 200 );
    //     }
    //     return response()->json( [
    //         'message' => 'couldn\'t store data'
    //     ], 401 );
    // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductsRequest $request, $id)
    {
        $data = $request->all();
        $product = Products::where('id' , $id)->first();
        $product->update($data);
        if($data['image'] === null){
            unset($data['image']);
            $product->update($data);
        }else{
           $product->image = custom_image($request);
           $product->save();
        }
        $product->save();
        if($product){
            return response()->json([
                'product' => $product
            ],200);
        }
        return response()->json([
            'message' => 'couldn\'t update data'
        ],401);//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Products::where('id' , $id)->delete();
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
