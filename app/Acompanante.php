<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acompanante extends Model
{
    protected $table = 'acompanante';

    public function nino(){
    	return $this->belongsTo('App\Nino');
    }

    public static function store($request)
    {
        //Crear nueva entrada en el catologo de acompanante
        $acompanante = new Acompanante();
        $acompanante->name = $request->name;
        $acompanante->save(); // se guarda en base de datos
        if(!empty($acompanante->id))
            return $acompanante;
        return null;
    }

    /*
    public static function actualizar($request, $acompanante)
    {
        $acompanante->qr = $request->qr;
        $acompanante->pais_id = $request->pais_id;
        $acompanante->estado_id = $request->estado_id;
        $acompanante->municipio_id = $request->municipio_id;
        $acompanante->save();
        return $acompanante;
    }*/

}
