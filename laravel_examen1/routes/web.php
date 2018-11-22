<?php

Route::view('/', "enunciado");
Route::view('formulario', 'cliente.create'); 
Route::get('/clientes', ['as' => 'clientes', 'uses' => 'clientesController@index']); 
Route::get('/hotels', ['as' => 'hotels', 'uses' => 'hotelsController@get']);
Route::get('/reserva/{id}', ['as' => 'reserva', 'uses' => 'clientesController@get']); 

Route::post('/form', ['as' => 'form', 'uses' => 'clientesController@create']); 