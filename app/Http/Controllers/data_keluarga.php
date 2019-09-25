<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class data_keluarga extends Controller
{
    //
Route::get('/',function){
    return view('welcome');
});
}
Route::get('/data-keluarga','data_keluargaController@index');
