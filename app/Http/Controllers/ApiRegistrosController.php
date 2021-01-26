<?php

namespace App\Http\Controllers;

use App\RegistrosServicios;
use App\EntradasSalidas;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ApiRegistrosController extends Controller
{
    public function storeRegistrosServicios(Request $request)
    {
        $request->validate([
            'qr' => 'required|string',
            'servicio' => 'required|string',
        ]); 

        $response = RegistrosServicios::store($request);

        if(!empty($response)){
            return response()->json([
                'status' => '1',
                'title' => 'Registro registrado',
                'msg' => 'Registro insertada correctamente',
                'data' => $response
            ], 201);
        }
        return response()->json([
            'status' => '0',
            'title' => 'Registro no insertado',
            'msg' => 'El registro no se registró correctamente'
        ], 200);
    }

    public function storeEntradasSalidas(Request $request)
    {
        $request->validate([
            'qr' => 'nullable|string',
            'tipo_registro' => 'nullable|string',
        ]);     


        $response = EntradasSalidas::store($request);

        if(!empty($response)){
            return response()->json([
                'status' => '1',
                'title' => 'Registro registrado',
                'msg' => 'Registro insertada correctamente',
                'data' => $response
            ], 201);
        }
        return response()->json([
            'status' => '0',
            'title' => 'Registro no insertado',
            'msg' => 'El registro no se registró correctamente'
        ], 200);
    }
}
