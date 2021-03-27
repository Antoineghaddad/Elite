<?php
if(!function_exists('custom_image')){
    function custom_image($request){
        $image = $request->image;
        $name = time().'_' . $image->getClientOriginalName();
        $filePath = $request->file('image')->storeAs('', $name, 'public');
        $admins['image'] = $name;  
        return $name;
    }
}

if(!function_exists('custom_image1')){
    function custom_image1($request){
        $image = $request->image1;
        $name = time().'_' . $image->getClientOriginalName();
        $filePath = $request->file('image1')->storeAs('', $name, 'public');
        $admins['image1'] = $name;  
        return $name;
    }
}
if(!function_exists('custom_image2')){
    function custom_image2($request){
        $image = $request->image2;
        $name = time().'_' . $image->getClientOriginalName();
        $filePath = $request->file('image2')->storeAs('', $name, 'public');
        $admins['image2'] = $name;  
        return $name;
    }
}
if(!function_exists('custom_image3')){
    function custom_image3($request){
        $image = $request->image3;
        $name = time().'_' . $image->getClientOriginalName();
        $filePath = $request->file('image3')->storeAs('', $name, 'public');
        $admins['image3'] = $name;  
        return $name;
    }
}
if(!function_exists('custom_image4')){
    function custom_image4($request){
        $image = $request->image4;
        $name = time().'_' . $image->getClientOriginalName();
        $filePath = $request->file('image4')->storeAs('', $name, 'public');
        $admins['image4'] = $name;  
        return $name;
    }
}
if(!function_exists('custom_image5')){
    function custom_image5($request){
        $image = $request->image5;
        $name = time().'_' . $image->getClientOriginalName();
        $filePath = $request->file('image5')->storeAs('', $name, 'public');
        $admins['image5'] = $name;  
        return $name;
    }
}
if(!function_exists('custom_image6')){
    function custom_image6($request){
        $image = $request->image6;
        $name = time().'_' . $image->getClientOriginalName();
        $filePath = $request->file('image6')->storeAs('', $name, 'public');
        $admins['image6'] = $name;  
        return $name;
    }
}
