<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'pais';

    public function estado(){
    	return $this->hasMany('App\Estado');
    }

}
