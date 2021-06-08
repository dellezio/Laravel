<?php

//Untuk Menampilkan Data
Route::get('/home', 'StudentController@home');

//Untuk Menampilkan Data
Route::get('/siswa', 'StudentController@index');

//Untuk Menginput Data
Route::post('/siswa/create', 'StudentController@create');

//edit Data 
Route::get('/siswa/{id}/edit', 'StudentController@edit');

//Update Data
Route::post('/siswa/{id}/update', 'StudentController@update');

//Delete Data
Route::get('/siswa/{id}/delete', 'StudentController@delete');



//Untuk Menampilkan Data
Route::get('/kelompoka/index', 'AController@index');

//Delete Data
Route::get('/kelompoka/{id_a}/delete', 'AController@delete');

//Untuk Menginput Data
Route::post('/kelompoka/create', 'AController@create');










// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/myprofile', function () {
//     return view('cv');
// });

// Route::get('/myprofile2', function () {
//     return view('cv2');
// });
// Route::get('/input', function () {
//     return view('input');
// });



