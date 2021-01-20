<?php

namespace App\Http\Controllers;

use App\Nino;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ApiNinoController extends Controller
{

    public function index(){
        return view('contents.nino');
    }

    /// Reglas de validación: https://laravel.com/docs/7.x/validation#available-validation-rules
    public function store(Request $request)
    {
        $request->validate([
            'qr' => 'required|string',
            'pais_id' => 'required|integer',
            'estado_id' => 'required|integer'
            //'municipio_id' => 'required|integer',
        ]); 

        $response = Nino::store($request);

        if(!empty($response)){
            return response()->json([
                'status' => '1',
                'title' => 'Nino agregada',
                'msg' => 'Nino fue insertada correctamente',
                'data' => $response
            ], 201);
        }
        return response()->json([
            'status' => '0',
            'title' => 'Nino no agregada',
            'msg' => 'Nino no añadida correctamente'
        ], 200);
    }

    public function getNino($id){
        $nino = Nino::where('id', $id)->with(['pais','estado', 'municipio'])->first();
        return response()->json($nino);
    }

    public function update(Request $request, Nino $nino)
    {
        $request->validate([
            'qr' => 'required|string',
            'pais_id' => 'required|integer',
            'estado_id' => 'required|integer'
        ]);

        if(!isset($nino)){
            return response()->json([
                'status' => '',
                'title' => 'Nino no actualizada',
                'msg' => 'Nino no debe ser nula',
            ], 200);
        }

        $response = Nino::actualizar($request, $nino);

        if(!empty($response)){
            return response()->json([
                'status' => '1',
                'title' => 'Nino actualizada',
                'msg' => 'Nino fue modificada correctamente',
                'data' => $response
            ], 200);
        }
    }
    public function destroy(Request $request, Nino $nino)
    {
        if(!isset($nino)){
            return response()->json([
                'status' => '',
                'title' => 'Nino no eliminada',
                'msg' => 'Nino no debe ser nulo',
            ], 200);
        }
        $nino->delete();
        return response()->json([
            'status' => '1',
            'title' => 'Nino eliminada',
            'msg' => 'Nino fue eliminado exitosamente',
        ], 200);
    }
    public function select2 (Request $request)
    {
        $request->validate([
            'q' => 'nullable|string',
            'page' => 'required|integer'
        ]);
       $res= Nino::select2($request);
        return response()->json([
            'status' => '1',
            'title' => 'Busqueda exitosa',
            'msg' => 'La busqueda se concretó correctamente',
            'data' => $res
        ], 200);
    }
    public function datatable(Request $request)
    {
        return Datatables::of(Nino::all())->make(true);
    }

    public function getNinosDataTable(Request $request)
    {
        if ($request->ajax()) {
            $data = Nino::select('*')->with(['estado', 'municipio', 'escolaridad'])->get();
            $response = array();
            foreach($data as $i => $nino){
                $response[$i]['id'] = $nino->id;
                $response[$i]['nombre'] = $nino->nombre . " " . $nino->apellido_materno . " " . $nino->apellido_paterno;
                $response[$i]['edad'] = $nino->edad;
                $response[$i]['sexo'] = $nino->sexo;
                $response[$i]['escolaridad'] = $nino->escolaridad['escolaridad'];
                $response[$i]['estado'] = $nino->estado['estado'];
                $response[$i]['municipio'] = $nino->municipio['municipio'];
                $response[$i]['qr'] = $nino->qr;
            }
            return Datatables::of($response)
                    ->addIndexColumn()
                    ->addColumn('ver_qr', function($row){
                        $btn = '<a href="javascript:void(0)" class="btn"><i class="fa fa-qrcode"></i></a>';
                        return $btn;
                    })
                    ->addColumn('ver_nino', function($row){
                        $btn = '<a href="javascript:void(0)" class="btn"><i class="fa fa-user"></i></a>';
                        return $btn;
                    })
                    ->rawColumns(['ver_qr', 'ver_nino'])
                    ->make(true);

        }
        return view('welcome');
    }
}
