<?php

//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\ApiFamiliaController; # don't forgot to add this

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/get-familia/{id}', 'App\Http\Controllers\ApiFamiliaController@getFamilia')->name('get-familia');
Route::get('/get-familias-datatable', 'App\Http\Controllers\ApiFamiliaController@getFamiliasDataTable')->name('get-familias-datatable');