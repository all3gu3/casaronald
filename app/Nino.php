<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nino extends Model
{
    protected $table = 'nino';

    public function estado(){
    	return $this->belongsTo('App\Estado');
    }

    public function pais(){
    	return $this->belongsTo('App\Pais');
    }

    public function municipio(){
    	return $this->belongsTo('App\Municipio');
    }

    public function hospital(){
    	return $this->belongsTo('App\Hospital');
    }

    public function escolaridad(){
    	return $this->belongsTo('App\Escolaridad');
    }

    public function acompanantes(){
    	return $this->hasMany('App\Acompanante');
    }


    public static function store($request)
    {
        //Crear nueva entrada en el catologo de nino
        $nino = new Nino();
        $nino->name = $request->name;
        $nino->save(); // se guarda en base de datos
        if(!empty($nino->id))
            return $nino;
        return null;
    }

    public static function validaQR(){
        return 1;
    }

    /*
    public static function actualizar($request, $nino)
    {
        $nino->qr = $request->qr;
        $nino->pais_id = $request->pais_id;
        $nino->estado_id = $request->estado_id;
        $nino->municipio_id = $request->municipio_id;
        $nino->save();
        return $nino;
    }*/

}
