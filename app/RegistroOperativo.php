<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroOperativo extends Model
{
    protected $table = 'registro_operativo';

    public static function store2($request){
        $registro = new Registro();

        $registro->id = $request->id;
		$registro->nino_id = $request->nino_id;
		$registro->hospital_id = $request->hospital_id;
		$registro->tipo_ninio_id = $request->tipo_ninio_id;
		$registro->tipo_tratamiento_id = $request->tipo_tratamiento_id;
		$registro->tipo_dieta_id = $request->tipo_dieta_id;
		$registro->trabajador_social_id = $request->trabajador_social_id;
		$registro->fecha_ingreso = $request->fecha_ingreso;
		$registro->fecha_egreso = $request->fecha_egreso;
		$registro->medico_atiende = $request->medico_atiende;
		$registro->diagnostico = $request->diagnostico;
		$registro->reingreso = $request->reingreso;
		$registro->ninos_adicionales = $request->ninos_adicionales;
		$registro->habitacion = $request->habitacion;
        $registro->observaciones = $request->observaciones;
        
        $registro->save(); // se guarda en base de datos
        if(!empty($registro->id))
            return $registro;
        return null;
    }

}
