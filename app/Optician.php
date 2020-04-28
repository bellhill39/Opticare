<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Optician extends Model
{

    protected $fillable =[

        'name',
        'br_number',
        'address',
        'contact_number',
        'latitude',
        'longitude'

    ];




    public function appointment(){

        return $this->hasMany('App\Appointment');
    }

    public function patient(){

        return $this->hasOne('App\Patient');
    }

    public function tests(){
        return $this->hasMany('App\Test');
    }

}
