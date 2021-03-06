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
    return view('welcome');
});

Route::get('/records', 'RecordController@index');
Route::get('/records/{$record}', 'RecordController@show');
Route::post('/create-records', 'RecordController@store');

Route::get('/registry-observer', 'AppClientController@index');
Route::post('/create-app-client', 'AppClientController@store');
