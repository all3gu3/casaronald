<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipio';

    public function estado(){
    	return $this->belongsTo('App\estado');
    }

}
