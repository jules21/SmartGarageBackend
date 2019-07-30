<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garage extends Model
{
    public function mechanicians()
    {
        $this->hasMany('App\Mechanician');
    }
    // public function services()
    // {
    //     $this->hasMany('App\Service');
    // }
    public function services()
    {
        $this->belongsToMany('App\Service','garage_service','garage_id','service_id');
    }
}
