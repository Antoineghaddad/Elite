<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTherapy extends Model
{
    protected $table = 'user_therapy';

    protected $fillable = [
        'user_id' , 'therapy_id' , 'day' , 'time'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
