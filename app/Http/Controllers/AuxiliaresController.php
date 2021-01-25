<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Nino;

class AuxiliaresController extends Controller
{
    //
    public function generaQR(){
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

    public function getQr(Request $request){

        $response = AuxiliaresController::generaQR();

        while(!Nino::validaQR()){
            $response = AuxiliaresController::generaQR();
        }

        return response()->json($response);
        
    }
}
