<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiRegistroOperativoController extends Controller
{
    public function store2(Request $request)
    {

        /*
        $request->validate([
            'id' => 'required|integer',
			'nino_id' => 'required|integer',
			'hospital_id' => 'required|integer',
			'tipo_ninio_id' => 'required|integer',
			'tipo_tratamiento_id' => 'required|integer',
			'tipo_dieta_id' => 'required|integer',
			'trabajador_social_id' => 'required|integer',
			'fecha_ingreso' => 'required|date',
			'fecha_egreso' => 'required|date',
			'medico_atiende' => 'required|string',
			'diagnostico' => 'required|string',
			'reingreso' => 'required|integer',
			'ninos_adicionales' => 'required|integer',
			'habitacion' => 'required|integer',
			'observaciones' => 'required|string'
        ]);
        */
        $response = RegistroOperativo::store2($request);

        if(!empty($response)){
            return response()->json([
                'status' => '1',
                'title' => 'Registro registrado',
                'msg' => 'Registro insertado correctamente',
                'data' => $response
            ], 201);
        }
        return response()->json([
            'status' => '0',
            'title' => 'Regsitro no insertado',
            'msg' => 'Registro no insertado correctamente'
        ], 200);
    }
}
