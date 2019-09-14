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

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
	$pagetitle = 'About';
    return view('about',['pagetitle' => $pagetitle]);
});
Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});
