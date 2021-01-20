<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class familia extends Model
{
    protected $table = 'familia';

    public function estado(){
    	return $this->belongsTo('App\Estado');
    }

    public function pais(){
    	return $this->belongsTo('App\Pais');
    }

    public function municipio(){
    	return $this->belongsTo('App\Municipio');
    }


    public static function store($request)
    {
        //Crear nueva entrada en el catologo de familia
        $familia = new Familia();
        $familia->name = $request->name;
        $familia->save(); // se guarda en base de datos
        if(!empty($familia->id))
            return $familia;
        return null;
    }

    public static function actualizar($request, $familia)
    {
        $familia->qr = $request->qr;
        $familia->pais_id = $request->pais_id;
        $familia->estado_id = $request->estado_id;
        $familia->municipio_id = $request->municipio_id;
        $familia->save();
        return $familia;
    }

}
