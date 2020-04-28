<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [

        'test_id',
        'optician_id',
        'patient_id',
        'date',
        'status'
    ];

public function optician(){

    return $this->belongsTo('App\Optician');

}

public function patient(){

    return $this->belongsTo('App\Patient');
}


}
