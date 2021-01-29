<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Acompanante extends Model
{
    protected $table = 'acompanante';

    public function nino(){
    	return $this->belongsTo('App\Nino');
    }
    public function parentesco(){
    	return $this->belongsTo('App\Parentesco');
    }

    public static function store($request)
    {
        //Crear nueva entrada en el catologo de acompanante
        $acompanante = new Acompanante();
        
        $acompanante->nombre = $request->nombre;
		$acompanante->apellido_paterno = $request->app;
        $acompanante->apellido_materno = $request->apm;
        $years = Carbon::parse($request->fec_nac)->age;
        $acompanante->edad = $years;
        $acompanante->fecha_registro = Carbon::now();
		$acompanante->sexo = $request->sexo;
		$acompanante->parentesco_id = $request->paren;
		$acompanante->escolaridad_id = $request->esc;
		$acompanante->nino_id = $request->nino;
		$acompanante->edo_salud_id = $request->edoSalud;
		$acompanante->ocupacion_id = $request->ocu;
		$acompanante->trabaja = $request->trab;
		$acompanante->licencia_goce_sueldo = $request->goce;
		$acompanante->seguro_medico = $request->seg;
		$acompanante->casa_propia = $request->casa;
		$acompanante->asistencia_financiera = $request->asist;
		$acompanante->renta_mensualidad = $request->rent;
		$acompanante->dependientes_economicos = $request->dep_ec;
		$acompanante->ingreso_mensual = $request->ing;

        $acompanante->save(); // se guarda en base de datos
        if(!empty($acompanante->id))
            return $acompanante;
        return null;
    }

    public static function store2($request)
    {
        $acompanante = new Acompanante();

        $acompanante->id = $request->id;
		$acompanante->nombre = $request->nombre;
		$acompanante->apellido_paterno = $request->apellido_paterno;
		$acompanante->apellido_materno = $request->apellido_materno;
		$acompanante->edad = $request->edad;
		$acompanante->sexo = $request->sexo;
		$acompanante->identificacion = $request->identificacion;
		$acompanante->tratamiento = $request->tratamiento;
		$acompanante->parentesco_id = $request->parentesco_id;
		$acompanante->escolaridad_id = $request->escolaridad_id;
		$acompanante->nino_id = $request->nino_id;
		$acompanante->edo_salud_id = $request->edo_salud_id;
		$acompanante->ocupacion_id = $request->ocupacion_id;
		$acompanante->trabaja = $request->trabaja;
		$acompanante->licencia_goce_sueldo = $request->licencia_goce_sueldo;
		$acompanante->seguro_medico = $request->seguro_medico;
		$acompanante->casa_propia = $request->casa_propia;
		$acompanante->asistencia_financiera = $request->asistencia_financiera;
		$acompanante->renta_mensualidad = $request->renta_mensualidad;
		$acompanante->dependientes_economicos = $request->dependientes_economicos;
		$acompanante->ingreso_mensual = $request->ingreso_mensual;

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
