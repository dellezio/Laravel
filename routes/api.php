<?php

use Illuminate\Http\Request;
use App\Exam;

// Route::get('api/index', 'ApiController@index');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route untuk menampilkan data
Route::get('kursus', 'API\ApiController@index');

//Route untuk Menambah Data
Route::post('kursus', 'API\ApiController@store');

//Route untuk Menampilakan secara detail
Route::get('kursus/{data}/detail', 'API\ApiController@show');

//Route untuk Update Data
Route::patch('kursus/{data}', 'API\ApiController@store');

//Route untuk menghapus cara 1
Route::delete('kursus2/{data}', function(Exam $data){
    $data->delete();
    return 'sukses';
});

//Route untuk menghapus cara 2
Route::delete('kursus/{data}', 'API\ApiController@destroy');


//Tabel Instituion
//Route untuk menampilkan data
Route::get('institution', 'API\InsController@index');
//Route untuk Menampilakan secara detail
Route::get('institution/{id}/detail', 'API\InsController@show');
//Route untuk Menambah Data
Route::post('institution', 'API\InsController@store');
//Route untuk menghapus 
Route::delete('institution/{id}', 'API\InsController@destroy');
//Route untuk Update Data
Route::patch('institution/{data}', 'API\InsController@store');

