<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function vehicles(){
        return $this->hasMany('App\Models\Vehicle');
    }

    public function supplies(){
        return $this->hasMany('App\Models\Supply');
    }
}
