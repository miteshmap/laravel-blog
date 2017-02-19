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

Route::get('/node', 'NodeController@index');
Route::get('/node/create', 'NodeController@create');
Route::post('/node', 'NodeController@store');
Route::get('/node/{node}', 'NodeController@show');
Route::post('/node/{node}/comment', 'CommentController@store');
//Route::('/node', 'NodeController@store');
