<?php

//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\ApiNinoController; # don't forgot to add this

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/get-nino/{id}', 'App\Http\Controllers\ApiNinoController@getNino')->name('get-nino');
Route::get('/get-ninos-datatable', 'App\Http\Controllers\ApiNinoController@getNinosDataTable')->name('get-ninos-datatable');