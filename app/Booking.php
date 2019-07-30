<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sooking extends Model
{
    //
    public function user()
    {
        $this->belongsTo('App\User');
    }
    public function garage()
    {
        $this->belongsTo('App\Garage');
    }
    public function service()
    {
        $this->belongsTo('App\Service');
    }
}
