<?php

//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\ApiNinoController; # don't forgot to add this
use App\Http\Controllers\ApiRegistrosController;
use App\Http\Controllers\ApiAcompananteController;

Route::get('/', function () {
    return view('welcome');
});

// Views
  
Route::get('/registros-lavanderia', 'App\Http\Controllers\HomeController@lavanderia')->name('registros-lavanderia');
Route::get('/registros-escuela', 'App\Http\Controllers\HomeController@escuela')->name('registros-escuela');
Route::get('/registros-comedor', 'App\Http\Controllers\HomeController@comedor')->name('registros-comedor');
Route::get('/registros-transporte', 'App\Http\Controllers\HomeController@transporte')->name('registros-transporte');
Route::get('/registros-entradas-salidas', 'App\Http\Controllers\HomeController@entradasSalidas')->name('registros-entradas-salidas');

Route::get('/familias', 'App\Http\Controllers\HomeController@familias')->name('familias');
Route::get('/registros', 'App\Http\Controllers\HomeController@registros')->name('registros');
Route::get('/operaciones', 'App\Http\Controllers\HomeController@operaciones')->name('operaciones');

// Auxiliares
Route::get('/get-qr', 'App\Http\Controllers\AuxiliaresController@getQr')->name('get-qr');

// Qr
Route::get('/get-ficha/{id?}', 'App\Http\Controllers\QrController@ficha')->name('get-ficha');


// API
/*Niños*/ 
Route::get('/get-nino/{id}', 'App\Http\Controllers\ApiNinoController@getNino')->name('get-nino');
Route::get('/get-nino-by-qr', 'App\Http\Controllers\ApiNinoController@getNinoByQr')->name('get-nino-by-qr');
Route::get('/get-ninos-datatable', 'App\Http\Controllers\ApiNinoController@getNinosDataTable')->name('get-ninos-datatable');
Route::post('/add-nino-script', 'App\Http\Controllers\ApiNinoController@store2')->name('add-nino-script');
Route::post('/add-nino', 'App\Http\Controllers\ApiNinoController@store')->name('add-nino');

/* Acompañantes */
Route::get('/get-acompanantes-datatable', 'App\Http\Controllers\ApiAcompananteController@getAcompanantesDataTable')->name('get-acompanantes-datatable');
Route::post('/add-acompanante', 'App\Http\Controllers\ApiAcompananteController@store')->name('add-acompanante');

/* Rutas para scripts de inserción */ 
Route::get('/add-acompanante-script', 'App\Http\Controllers\ApiAcompananteController@store2')->name('add-acompanante-script');
Route::get('/add-nino-script', 'App\Http\Controllers\ApiNinoController@store2')->name('add-nino-script');
Route::get('/add-registro-script', 'App\Http\Controllers\ApiRegistroOperativoController@store2')->name('add-registro-script');

/*Registros*/
Route::get('/add-entrada-salida', 'App\Http\Controllers\ApiRegistrosController@storeEntradasSalidas')->name('add-entrada-salida');
Route::get('/add-registro-servicio', 'App\Http\Controllers\ApiRegistrosController@storeRegistrosServicios')->name('add-registro-servicio');

Route::get('/get-lavanderia-datatable', 'App\Http\Controllers\ApiRegistrosController@getLavanderiaDataTable')->name('get-lavanderia-datatable');
Route::get('/get-comedor-datatable', 'App\Http\Controllers\ApiRegistrosController@getComedorDataTable')->name('get-comedor-datatable');
Route::get('/get-transporte-datatable', 'App\Http\Controllers\ApiRegistrosController@getTransporteDataTable')->name('get-transporte-datatable');
Route::get('/get-escuela-datatable', 'App\Http\Controllers\ApiRegistrosController@getEscuelaDataTable')->name('get-escuela-datatable');
Route::get('/get-entradas-salidas-datatable', 'App\Http\Controllers\ApiRegistrosController@getEntradasSalidasDataTable')->name('get-entradas-salidas-datatable');
    
