<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userrole extends Model
{
    public function role(){
    	return $this->belongsTo('\App\Role');
    }

    public function profile(){
    	return $this->hasOne('\App\Profile');
    }
}
