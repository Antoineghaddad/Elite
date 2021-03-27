<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Therapy extends Model
{
    protected $table = 'therapy';

    protected $fillable = [
        'type' , 'title' , 'image' , 'price' , 'description' , 'therapist_id'
    ];

    public function therapist(){
        return $this->belongsTo(Therapist::class);
    }
}
