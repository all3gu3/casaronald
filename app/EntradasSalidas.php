<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntradasSalidas extends Model
{
    protected $table = 'entradas_salidas';

    public static function store($request)
    {  
        //ENTRADA
        if($request->tipo_registro == 'entrada'){
            //Crear nueva entrada en el registro
            $registro = new EntradasSalidas();
            $registro->qr = $request->qr;
            $registro->entrada = now();
            
            $registro->save(); 
            if(!empty($registro->id))
                $registros = EntradasSalidas::where('qr', $request->qr)->get();
                return $registros;
            return null;
        }
        //SALIDA
        else{
            //SALIDA COMPLEMENTARIA A UNA ENTRADA
            $ultimo = EntradasSalidas::where('qr', $request->qr)->orderBy('created_at', 'DESC')->first();
            if($ultimo->salida == NULL){
                $ultimo->salida = now();
                $ultimo->save();    

                $registros = EntradasSalidas::where('qr', $request->qr)->get();
                return $registros;
            }
            //SALIDA SIN PREVIA ENTRADA
            else{
                $registro = new EntradasSalidas();
                $registro->qr = $request->qr;
                $registro->salida = now();
                
                $registro->save();
                if(!empty($registro->id))
                    $registros = EntradasSalidas::where('qr', $request->qr)->get();
                    return $registros;
                return null;
            }
        }
    }

}
