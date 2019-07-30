<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mechanician extends Model
{
    //
    public function garage()
    {
        $this->belongsTo('App\Garage');
    }
    // public function specialities()
    // {
    //     $this->belongsToMany('App\Speciality','mechanician_speciality','mechanician_id','speciality_id');
    // }
}
