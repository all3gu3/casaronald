<?php

//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\ApiNinoController; # don't forgot to add this
use App\Http\Controllers\ApiRegistrosController;

Route::get('/', function () {
    return view('welcome');
});

// Views
Route::get('/registros-lavanderia', 'App\Http\Controllers\HomeController@lavanderia')->name('registros-lavanderia');
Route::get('/registros-escuela', 'App\Http\Controllers\HomeController@escuela')->name('registros-escuela');
Route::get('/registros-comedor', 'App\Http\Controllers\HomeController@comedor')->name('registros-comedor');
Route::get('/registros-entradas-salidas', 'App\Http\Controllers\HomeController@entradasSalidas')->name('registros-entradas-salidas');

Route::get('/familias', 'App\Http\Controllers\HomeController@familias')->name('familias');
Route::get('/registros', 'App\Http\Controllers\HomeController@registros')->name('registros');
Route::get('/operaciones', 'App\Http\Controllers\HomeController@operaciones')->name('operaciones');

// Auxiliares
Route::get('/get-qr', 'App\Http\Controllers\AuxiliaresController@getQr')->name('get-qr');

// API
/*Niños*/ 
Route::get('/get-nino/{id}', 'App\Http\Controllers\ApiNinoController@getNino')->name('get-nino');
Route::get('/get-nino-by-qr', 'App\Http\Controllers\ApiNinoController@getNinoByQr')->name('get-nino-by-qr');
Route::get('/get-ninos-datatable', 'App\Http\Controllers\ApiNinoController@getNinosDataTable')->name('get-ninos-datatable');
/*Registros*/
Route::get('/add-entrada-salida', 'App\Http\Controllers\ApiRegistrosController@storeEntradasSalidas')->name('add-entrada-salida');
Route::get('/add-registro-servicio', 'App\Http\Controllers\ApiRegistrosController@storeRegistrosServicios')->name('add-registro-servicio');

