<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    public function city() {
    	return $this->hasMany('App\City', 'stateId', 'id');
    }
}
