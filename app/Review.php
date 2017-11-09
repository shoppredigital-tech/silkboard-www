<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function country(){
 		return $this->hasOne('App\Country', 'id', 'countrid');
	}
}