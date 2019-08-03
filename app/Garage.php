<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    protected $guarded = [];
    public function mechanicians()
    {
        return $this->hasMany('App\Mechanician');
    }
    // public function services()
    // {
    //     $this->hasMany('App\Service');
    // }
    public function services()
    {
       return $this->belongsToMany('App\Service','garage_service','garage_id','service_id');
    }
}
