<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [

        'optician_id',
        'patient_id',
        'type',

    ];


    public function vision(){
        return $this->hasOne('App\Vision');
    }

}
