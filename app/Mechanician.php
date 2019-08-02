<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mechanician extends Model
{

  protected $guarded = [];

    //
    public function garage()
    {
      return $this->belongsTo('App\Garage');
    }
    public function specialities()
    {
       return $this->belongsToMany('App\Speciality','mechanician_speciality','mechanician_id','speciality_id');
    }
}
