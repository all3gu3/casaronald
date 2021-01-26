<?php

namespace App\Http\Controllers;

use App\Familia;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ApiFamiliaController extends Controller
{

    /// Reglas de validación: https://laravel.com/docs/7.x/validation#available-validation-rules
    public function store(Request $request)
    {
        $request->validate([
            'qr' => 'required|string',
            'pais_id' => 'required|integer',
            'estado_id' => 'required|integer'
            //'municipio_id' => 'required|integer',
        ]); 

        $response = Familia::store($request);

        if(!empty($response)){
            return response()->json([
                'status' => '1',
                'title' => 'Familia agregada',
                'msg' => 'Familia fue insertada correctamente',
                'data' => $response
            ], 201);
        }
        return response()->json([
            'status' => '0',
            'title' => 'Familia no agregada',
            'msg' => 'Familia no añadida correctamente'
        ], 200);
    }

    public function getFamilia($id){
        $familia = Familia::where('id', $id)->with(['pais','estado', 'municipio'])->first();
        return response()->json($familia);
    }

    public function update(Request $request, Familia $familia)
    {
        $request->validate([
            'qr' => 'required|string',
            'pais_id' => 'required|integer',
            'estado_id' => 'required|integer'
        ]);

        if(!isset($familia)){
            return response()->json([
                'status' => '',
                'title' => 'Familia no actualizada',
                'msg' => 'Familia no debe ser nula',
            ], 200);
        }

        $response = Familia::actualizar($request, $familia);

        if(!empty($response)){
            return response()->json([
                'status' => '1',
                'title' => 'Familia actualizada',
                'msg' => 'Familia fue modificada correctamente',
                'data' => $response
            ], 200);
        }
    }
    public function destroy(Request $request, Familia $familia)
    {
        if(!isset($familia)){
            return response()->json([
                'status' => '',
                'title' => 'Familia no eliminada',
                'msg' => 'Familia no debe ser nulo',
            ], 200);
        }
        $familia->delete();
        return response()->json([
            'status' => '1',
            'title' => 'Familia eliminada',
            'msg' => 'Familia fue eliminado exitosamente',
        ], 200);
    }
    public function select2 (Request $request)
    {
        $request->validate([
            'q' => 'nullable|string',
            'page' => 'required|integer'
        ]);
       $res= Familia::select2($request);
        return response()->json([
            'status' => '1',
            'title' => 'Busqueda exitosa',
            'msg' => 'La busqueda se concretó correctamente',
            'data' => $res
        ], 200);
    }
    public function datatable(Request $request)
    {
        return Datatables::of(Familia::all())->make(true);
    }

    public function getFamiliasDataTable(Request $request)
    {
        if ($request->ajax()) {
            $data = Familia::select('*')->with(['pais', 'estado', 'municipio'])->get();
            $response = array();
            foreach($data as $i => $familia){
                $response[$i]['id'] = $familia->id;
                $response[$i]['qr'] = $familia->qr;
                $response[$i]['pais'] = $familia->pais['pais'];
                $response[$i]['estado'] = $familia->estado['estado'];
                $response[$i]['municipio'] = $familia->municipio['municipio'];
            }
            return Datatables::of($response)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Ver</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);

        }
        return view('welcome');
    }
}
