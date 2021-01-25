<?php

namespace App\Http\Controllers;

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
        return view('familias');
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
    public function entradasSalidas(){
        return view('datatables.entradas_salidas');
    }

}
