<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =[

        'patient_id',
        'optician_id',
        'vision_id',
        'type',
        'product_name',
        'description'

    ];

    public function patient(){
        return $this->belongsTo('App\Patient');
    }

    public function optician(){
        return $this->belongsTo('App\Optician');

    }

    public function vision(){
        return $this->belongsTo('App\Vision');

    }

}
