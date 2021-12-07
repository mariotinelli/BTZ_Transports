<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    use HasFactory;

    protected $dates = ['date'];

    public function vehicle (){
        return $this->belongsTo('App\Models\Vehicle');
    }
    public function driver (){
        return $this->belongsTo('App\Models\Driver');
    }
    public function fuel (){
        return $this->belongsTo('App\Models\Fuel');
    }

}
