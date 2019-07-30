<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function user()
    {
        $this->belongTo('App\User');
    }
    // public function garage()
    // {
    //     $this->belongTo('App\Garage');
    // }
    public function garages()
    {
        $this->belongsToMany('App\Service','garage_service','service_id','garage_id');
    }
}
