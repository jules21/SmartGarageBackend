<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    protected $guarded = [];
    //
    // public function mechanician()
    // {
    //     $this->belongsTo('App\Mechanician');
    // }
    public function mechanicians()
    {
        return $this->belongToMany('App\Mechanician','mechanician_speciality','speciality_id','mechanician_id');
    }
}
