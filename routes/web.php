<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'PagesController@index');
// about
Route::get('/about', 'PagesController@about');
// mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@index');
//  student
Route::get('/student', 'StudentController@index'); // show all data
Route::get('/student/create', 'StudentController@create'); // create new data
Route::get('/student/{student}', 'StudentController@show'); // detail data
Route::post('/student', 'StudentController@store'); // tampung data yang mau di add
Route::delete('/student/{student}', 'StudentController@destroy'); // delete data
Route::get('/student/{student}/edit', 'StudentController@edit'); // edit data

