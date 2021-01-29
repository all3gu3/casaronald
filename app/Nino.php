<?php

namespace App;

use App\Http\Controllers\AuxiliaresController;

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

    public static function generaQR(){
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $numeric = 0; // Contador de caracteres numericos
        $char = 0; // Contador de caracteres alfabeticos
        $randomString = ''; // String que contiene la 
        $randomChar = '';
        while (strlen($randomString) < 6){
            $randomChar = $characters[mt_rand(0, $charactersLength - 1)];   
            if (is_numeric($randomChar) && $numeric < 3){
                $numeric++;
                $randomString .= $randomChar;
            }
            if (ctype_alpha($randomChar) && $char < 3){
                $char++;
                $randomString .= $randomChar;
            }
            
        }
        return $randomString;
    }


    public static function store($request)
    {
        //Crear nueva entrada en el catologo de nino
        $nino = new Nino();

        $nino->qr = Nino::generaQR();
        while(!Nino::validaQR()){
            $nino->qr = Nino::generaQR();
        }

		$nino->fecha_solicitud = $request->fec_sol;
		$nino->fecha_ingreso = $request->fec_in;
		$nino->fecha_salida = $request->fec_eg;

		$nino->pais_id = $request->pais;
        $nino->estado_id =  $request->est;
        $nino->municipio =  $request->mun;

		$nino->estatus_estancia = $request->estatus;
		$nino->hospital_id = $request->hos;
		$nino->servicio = $request->serv;
		$nino->apellido_materno = $request->app;
		$nino->apellido_paterno = $request->apm;
		$nino->nombre = $request->nombre;
		$nino->edad = $request->edad;
        $nino->sexo = $request->sexo;
        $nino->fecha_nacimiento = $request->fec_nac;
		$nino->escolaridad_id = $request->esc;
		$nino->clasificacion_social_id = $request->rango;
		$nino->calle = $request->calle;
		$nino->numero = $request->num_c;
		$nino->colonia = $request->col;
		$nino->localidad = $request->loca;
		$nino->cp = $request->cp;
		$nino->zona_id = $request->zona;
		$nino->primer_telefono = $request->tel1;
		$nino->segundo_telefono = $request->tel2;
		$nino->dialecto = $request->dial;
		$nino->medico = $request->medico;
		$nino->diagnostico = $request->diag;
		$nino->salario_minimo_id = $request->sal_min;
		$nino->trabajador_social_id = $request->trab;
		$nino->observaciones = $request->obs;
		$nino->tipo_dieta_id = $request->diet;


        $nino->save(); // se guarda en base de datos
        if(!empty($nino->id))
            return $nino;
        return null;
    }

    public static function store2($request)
    {
        //Crear nueva entrada en el catologo de nino
        $nino = new Nino();
        
		$nino->id = $request->id;
		$nino->qr = $request->qr;
		$nino->nombre = $request->nombre;
		$nino->apellido_paterno = $request->apellido_paterno;
		$nino->apellido_materno = $request->apellido_materno;
		$nino->fecha_nacimiento = $request->fecha_nacimiento;
		$nino->edad = $request->edad;
		$nino->sexo = $request->sexo;
		$nino->calle = $request->calle;
		$nino->numero = $request->numero;
		$nino->localidad = $request->localidad;
		$nino->cp = $request->cp;
		$nino->primer_telefono = $request->primer_telefono;
		$nino->segundo_telefono = $request->segundo_telefono;
		$nino->dialecto = $request->dialecto;
		$nino->escolaridad_id = $request->escolaridad_id;
		$nino->clasificacion_social_id = $request->clasificacion_social_id;
		$nino->zona_id = $request->zona_id;
		$nino->salario_minimo_id = $request->salario_minimo_id;
		$nino->pais_id =   $request->pais_id;
		$nino->estado_id =   $request->estado_id;
		$nino->municipio = $request->municipio;

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
