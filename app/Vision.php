<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vision extends Model
{
    protected $fillable = [

      'optician_id',
      'patient_id',
        'test_id',

        'l_sphere',
        'l_cyl',
        'l_axis',
        'l_add',
        'l_pAndB',

        'r_sphere',
        'r_cyl',
        'r_axis',
        'r_add',
        'r_pAndB',

    ];

    public function optician(){
        return $this->belongsTo('App\Optician');
    }

    public function  patient(){
        return $this->belongsTo('App\Patient');
    }

    public function product(){
        return $this->hasOne('App\Product');
    }

    public function test(){
        return $this->belongsTo('App\Test');
    }
}
