<?php

namespace App\Http\Controllers;

use App\Acompanante;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
class ApiAcompananteController extends Controller
{
    //
    public function store(Request $request)
    {
        /*
        $request->validate([
            'id' => 'required|integer',
			'nombre' => 'required|string',
			'apellido_paterno' => 'required|string',
			'apellido_materno' => 'required|string',
			'edad' => 'required|integer',
			'sexo' => 'required|string',
			'identificacion' => 'required|integer',
			'tratamiento' => 'required|integer',
			'parentesco_id' => 'required|integer',
			'escolaridad_id' => 'required|integer',
			'nino_id' => 'required|integer',
			'edo_salud_id' => 'required|integer',
			'ocupacion_id' => 'required|integer',
			'trabaja' => 'required|string',
			'licencia_goce_sueldo' => 'required|string',
			'seguro_medico' => 'required|string',
			'casa_propia' => 'required|string',
			'asistencia_financiera' => 'required|string',
			'renta_mensualidad' => 'required|string',
			'dependientes_economicos' => 'required|string',
			'ingreso_mensual' => 'required|string'
        ]); */

        $response = Acompanante::store($request);

        if(!empty($response)){
            return response()->json([
                'status' => '1',
                'title' => 'Acompanante agregada',
                'msg' => 'Aompanante fue insertada correctamente',
                'data' => $response
            ], 201);
        }
        return response()->json([
            'status' => '0',
            'title' => 'Aompanante no agregada',
            'msg' => 'Aompanante no añadida correctamente'
        ], 200);
    }

    public function store2(Request $request)
    {
        /*
        $request->validate([
            'id' => 'required|integer',
			'nombre' => 'required|string',
			'apellido_paterno' => 'required|string',
			'apellido_materno' => 'required|string',
			'edad' => 'required|integer',
			'sexo' => 'required|string',
			'identificacion' => 'required|integer',
			'tratamiento' => 'required|integer',
			'parentesco_id' => 'required|integer',
			'escolaridad_id' => 'required|integer',
			'nino_id' => 'required|integer',
			'edo_salud_id' => 'required|integer',
			'ocupacion_id' => 'required|integer',
			'trabaja' => 'required|string',
			'licencia_goce_sueldo' => 'required|string',
			'seguro_medico' => 'required|string',
			'casa_propia' => 'required|string',
			'asistencia_financiera' => 'required|string',
			'renta_mensualidad' => 'required|string',
			'dependientes_economicos' => 'required|string',
			'ingreso_mensual' => 'required|string'
        ]); */

        $response = Acompanante::store2($request);

        if(!empty($response)){
            return response()->json([
                'status' => '1',
                'title' => 'Acompanante agregada',
                'msg' => 'Aompanante fue insertada correctamente',
                'data' => $response
            ], 201);
        }
        return response()->json([
            'status' => '0',
            'title' => 'Aompanante no agregada',
            'msg' => 'Aompanante no añadida correctamente'
        ], 200);
    }

    public function getAcompanantesDataTable(Request $request)
    {
        if ($request->ajax()) {
            $data = Acompanante::where('nino_id', $request->id)->with(['parentesco'])->get();
            $response = array();
            foreach($data as $i => $acompanante){
                $response[$i]['id'] = $acompanante->id;
                $response[$i]['nombre'] = $acompanante->nombre . " " . $acompanante->apellido_materno . " " . $acompanante->apellido_paterno;
                $response[$i]['edad'] = $acompanante->edad;
                $response[$i]['sexo'] = $acompanante->sexo;
                $response[$i]['parentesco'] = $acompanante->parentesco['parentesco'];
            }
            return Datatables::of($response)
                    ->addIndexColumn()
                    ->addColumn('foto_a', function($row){
                        $img = '<img src="http://casaronald.denissereginagarcia.com/storage/app/public/person.png" height="75" alt="Foto de acompañante">';
                        return $img;
                    })
                    ->rawColumns(['foto_a'])
                    ->make(true);

        }
        return view('welcome');
    }
}
