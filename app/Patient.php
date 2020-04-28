<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable =[

        'contact_number',
        'optician_id',
        'birthday',
        'address'


    ];


    public function optician(){

        return $this->belongsTo('App\Optician');
    }

    public function  test(){
        return $this->hasMany('App\Test');
    }

    public function vision(){
        return $this->hasMany('App\Vision');
    }

}
