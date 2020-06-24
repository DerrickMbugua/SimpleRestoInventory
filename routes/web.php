<?php

use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
  return view('welcome');
});*/

Route::get('/','RestoController@index');
Route::get('/list','RestoController@list');
Route::view('/add','add');
Route::post('add','RestoController@add');
Route::get('/delete/{id}','RestoController@delete');
Route::get('/edit/{id}','RestoController@edit');
Route::post('edit','RestoController@update');
Route::view('register','register');
Route::post('register','RestoController@register');
Route::view('login','login');
Route::post('login','RestoController@login');