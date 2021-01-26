<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use App\Nino;
use App\Parentesco;
use App\Hospital;
use Carbon\Carbon;

class QrController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ficha($id=2)
    {
        $nino = Nino::where("id", $id)->with(['acompanantes', 'estado', 'municipio', 'pais', 'hospital'])->first();
            
        //-> Generamos un lienzo base
        $img = \Image::canvas(1072, 830);
        
        //-> Código QR
        $ch = curl_init('https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl='.urlencode('http://denisseregina.garcia/familias/'.$nino->qr));
        $fp = fopen(storage_path('app/public/qr/qr.png'), 'wb');
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
        fclose($fp);
        
        /* IMAGENES */ 
        //-> Inserción del código qr
        $img2 = \Image::make(storage_path('app/public/qr/qr.png')); $img2->resize(240, 240); $img->insert($img2, 'bottom-right', 192, 65);

        //-> Inserción de plantilla 1
        $img2 = \Image::make(storage_path('app/public/1.png')); $img2->resize(536, 830); $img->insert($img2, 'bottom-right', 0, 0);

        //-> Inserción de plantilla 2
        $img2 = \Image::make(storage_path('app/public/2.png')); $img2->resize(536, 830); $img->insert($img2, 'bottom-left', 0, 0);

        //-> Inserción del logo
        $img2 = \Image::make(storage_path('app/public/logo_n.png')); $img2->resize(300, 115); $img->insert($img2, 'top-left', 581, 50);

        //-> Inserción del logo localizacion
        $img2 = \Image::make(storage_path('app/public/loc.png')); $img2->resize(30, 30); $img->insert($img2, 'top-left', 576, 260);
        //-> Inserción del logo hospital
        $img2 = \Image::make(storage_path('app/public/hos.png')); $img2->resize(30, 30); $img->insert($img2, 'top-left', 580, 370);

        /* TEXTO */
        //-> Código
        $qr = $nino->qr;
        $img->text($qr, 705, 780, function($font){
            $font->file(storage_path("app/public/Raleway-Bold.ttf")); $font->color("#000000"); $font->size(30);
        });

        //-> Nombre y eda
        $nombre_nino = $nino->nombre." ".$nino->apellido_materno." ".$nino->apellido_paterno.", ".$nino->edad." años";
        $img->text($nombre_nino, 581, 235, function($font){
            $font->file(storage_path("app/public/Raleway-Bold.ttf")); $font->color("#666666"); $font->size(25);
        });

        //-> Direccion
        $direccion_nino = $nino->localidad;
        $img->text($direccion_nino, 581, 310, function($font){
            $font->file(storage_path("app/public/Raleway-Bold.ttf")); $font->color("#666666"); $font->size(20);
        });

        //-> Direccion
        $direccion_nino = $nino->municipio['municipio'].', '.$nino->estado['estado'].', '.$nino->pais['pais'];
        $img->text($direccion_nino, 581, 340, function($font){
            $font->file(storage_path("app/public/Raleway-Bold.ttf")); $font->color("#666666"); $font->size(18);
        });

        //-> Hospital
        $hospital = $nino->hospital['hospital'];
        $img->text($hospital, 581, 420, function($font){
            $font->file(storage_path("app/public/Raleway-Bold.ttf")); $font->color("#666666"); $font->size(18);
        });

        $p=70;
        $guioncito = "____________________________________________";
        $parientes = array();
        //-> Parientes
        foreach($nino->acompanantes as $i => $acompanante){
            $parientes[$i]['nombre_completo'] = $nino->acompanantes[$i]['nombre']. " " . $nino->acompanantes[$i]['apellido_paterno'] . " " . $nino->acompanantes[$i]['apellido_materno'];
            $parientes[$i]['edad'] = $nino->acompanantes[$i]['edad'];
            $parientes[$i]['sexo'] = $nino->acompanantes[$i]['sexo'];
            $parientes[$i]['parentesco'] = Parentesco::find($nino->acompanantes[$i]['parentesco_id']);
        }

        $img->text("Acompañantes", 35, $p, function($font){
            $font->file(storage_path("app/public/Raleway-Bold.ttf")); $font->color("#000000"); $font->size(20);
        });

        foreach($parientes as $i => $pariente){
            $p = $p+35; //Parentesco
            $el_parentesco = "Parentesco: ".$pariente['parentesco']->parentesco;
            $img->text($el_parentesco, 35, $p, function($font){
                $font->file(storage_path("app/public/Raleway-Bold.ttf"));
                $font->color("#000000");
                $font->size(16);
            });
            
            $p = $p+25; //Datos
            $el_pariente = $pariente['nombre_completo'].', '.$pariente['sexo'].', '.$pariente['edad'].' años';
            $img->text($el_pariente, 35, $p, function($font){
                $font->file(storage_path("app/public/Raleway-Bold.ttf"));
                $font->color("#000000");
                $font->size(16);
            });
            
            $p = $p+15; //Guioncito
            $img->text("____________________________________________", 35, $p, function($font){
                $font->file(storage_path("app/public/Raleway-Bold.ttf"));
                $font->color("#000000");
                $font->size(16);
            });
            
                
        }

        //-> Guardar carnet
        $dir = "carnes/";
        $dir_2 = "app/public/carnes/";
        $img->save(storage_path($dir_2).$nino->id.'.jpg', 95);
        //-> Regresamos la imagen
        //return "<img src='"."http://localhost/casaronald/casaronald/storage/".$dir_2.$nino->qr.'.jpg'."?_=".mt_rand(1,10)."'>";
        return "http://localhost/casaronald/casaronald/storage/".$dir_2.$nino->id.'.jpg';
    }
}
