<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Massage extends Model
{
    protected $table = 'massage';

    protected $fillable = [
        'title' , 'image' , 'price' , 'description' , 'massager_id'
    ];

    public function massager(){
        return $this->belongsTo(Massager::class);
    }
}
