<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    public function subcategory() {
    	return $this->hasMany('App\SubCategory', 'maincategoryid', 'id');
    }
}
