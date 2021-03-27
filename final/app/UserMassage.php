<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMassage extends Model
{
    protected $table = 'user_massage';

    protected $fillable = [
        'user_id' , 'massage_id' , 'day' , 'time'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
