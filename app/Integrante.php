<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Integrante extends Model
{
    protected $table = 'integrante';
    
    public function role(){
    	return $this->hasMany('App\Role');
    }

}
