<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistrosServicios extends Model
{
    protected $table = 'registros_servicios';

    public static function store($request)
    {
        //Crear nueva entrada en el registro
        $registro = new RegistrosServicios();
        $registro->qr = $request->qr;
        $registro->servicio = $request->servicio;
    
        $registro->save(); // se guarda en base de datos

        if(!empty($registro->id))
            $registros = RegistrosServicios::where([['qr', $request->qr], ['servicio', $request->servicio]])->get();
            return $registros;
        return null;
    }
}
