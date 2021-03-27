<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSalon extends Model
{
    protected $table = 'user_salon';

    protected $fillable = [
        'user_id' , 'salon_id' , 'day' , 'time'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
