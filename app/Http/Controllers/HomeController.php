<?php

namespace App\Http\Controllers;

use App\Pais;
use App\Estado;
use App\Municipio;
use App\ClasificacionSocial;
use App\EdoSalud;
use App\Escolaridad;
use App\Hospital;
use App\Ocupacion;
use App\Parentesco;
use App\SalarioMinimo;
use App\TipoDieta;
use App\TipoNinio;
use App\TipoTratamiento;
use App\TrabajadorSocial;
use App\Zona;
use App\Tratamiento;

use App\Nino;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function inicio(){
        return view('inicio');
    }
    public function familias(){
        $hospitales = Hospital::all();
        $paises = Pais::all();
        $estados = Estado::all();
        $zonas = Zona::all();
        $escolaridades = Escolaridad::all();
        $salario = SalarioMinimo::all();
        $trabajadores = TrabajadorSocial::orderBy('trabajador_social')->get();
        $dietas = TipoDieta::all();
        $parentescos = Parentesco::all();
        $ocupaciones = Ocupacion::all();
        $edosSalud = EdoSalud::all();
        $ninos = Nino::select('id', 'nombre', 'apellido_paterno', 'apellido_materno', 'qr')->get();

        return view('familias', [
            "hospitales" => $hospitales,
            "paises" => $paises, 
            "estados" => $estados, 
            "zonas" => $zonas, 
            "escolaridades" => $escolaridades, 
            "salario" => $salario, 
            "trabajadores" => $trabajadores, 
            "dietas" => $dietas,
            "ninos" => $ninos,
            "edosSalud" => $edosSalud, 
            "parentescos" => $parentescos,
            "ocupaciones" => $ocupaciones
        ]);
    }
    public function registros(){
        return view('registros');
    }
    public function operaciones(){
        return view('operaciones');
    }

    public function lavanderia(){
        return view('datatables.lavanderia');
    }
    public function comedor(){
        return view('datatables.comedor');
    }
    public function escuela(){
        return view('datatables.escuela');
    }
    public function transporte(){
        return view('datatables.transporte');
    }
    public function entradasSalidas(){
        return view('datatables.entradas_salidas');
    }

}
