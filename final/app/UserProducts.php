<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProducts extends Model
{
    protected $table = 'user_products';

    protected $fillable = [
        'user_id' , 'product_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function product(){
        return $this->belongsTo(Products::class);
    }
}
