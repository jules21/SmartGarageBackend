<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public function users()
    {
        $this->hasMany('App\User');
    }
}
