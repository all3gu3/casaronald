<?php

namespace App\Http\Controllers;

use App\Nino;
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
        $servicios = RegistrosServicios::where([['qr', $request->qr],['servicio', $request->servicio]])->get();

        if(!empty($response)){
            return response()->json([
                'status' => '1',
                'title' => 'Registro registrado',
                'msg' => 'Registro insertada correctamente',
                'data' => $servicios
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

    public function getLavanderiaDataTable(Request $request)
    {
        if ($request->ajax()) {
            $data = RegistrosServicios::where('servicio', 'lavanderia')->get();
            $response = array();
            foreach($data as $i => $registro){
                $response[$i]['id'] = $registro->id;
                $response[$i]['QR'] = $registro->qr;
                $response[$i]['servicio'] = $registro->servicio;
                $response[$i]['fecha_hora'] = $registro->created_at->format('m/d/Y h:i:s');
            }
            return Datatables::of($response)
                    ->addIndexColumn()
                    ->make(true);

        }
        return view('welcome');
    }

    public function getComedorDataTable(Request $request)
    {
        if ($request->ajax()) {
            $data = RegistrosServicios::where('servicio', 'comedor')->get();
            $response = array();
            foreach($data as $i => $registro){
                $response[$i]['id'] = $registro->id;
                $response[$i]['QR'] = $registro->qr;
                $response[$i]['servicio'] = $registro->servicio;
                $response[$i]['fecha_hora'] = $registro->created_at->format('m/d/Y h:i:s');
            }
            return Datatables::of($response)
                    ->addIndexColumn()
                    ->make(true);

        }
        return view('welcome');
    }

    public function getTransporteDataTable(Request $request)
    {
        if ($request->ajax()) {
            $data = RegistrosServicios::where('servicio', 'transporte')->get();
            $response = array();
            foreach($data as $i => $registro){
                $response[$i]['id'] = $registro->id;
                $response[$i]['QR'] = $registro->qr;
                $response[$i]['servicio'] = $registro->servicio;
                $response[$i]['fecha_hora'] = $registro->created_at->format('m/d/Y h:i:s');
            }
            return Datatables::of($response)
                    ->addIndexColumn()
                    ->make(true);

        }
        return view('welcome');
    }

    public function getEscuelaDataTable(Request $request)
    {
        if ($request->ajax()) {
            $data = RegistrosServicios::where('servicio', 'escuela')->get();
            $response = array();
            foreach($data as $i => $registro){
                $response[$i]['id'] = $registro->id;
                $response[$i]['QR'] = $registro->qr;
                $response[$i]['servicio'] = $registro->servicio;
                $response[$i]['fecha_hora'] = $registro->created_at->format('m/d/Y h:i:s');
            }
            return Datatables::of($response)
                    ->addIndexColumn()
                    ->make(true);

        }
        return view('welcome');
    }

    public function getEntradasSalidasDataTable(Request $request)
    {
        if ($request->ajax()) {
            $data = EntradasSalidas::select('*');
            $response = array();
            foreach($data as $i => $registro){
                $response[$i]['id'] = $registro->id;
                $response[$i]['QR'] = $registro->qr;
                $response[$i]['entrada'] = $registro->created_at->format('m/d/Y h:i:s');
                $response[$i]['salida'] = $registro->salida->format('m/d/Y h:i:s');
            }
            return Datatables::of($response)
                ->addIndexColumn()
                ->make(true);

        }
        return view('welcome');
    }
}
