<?php

use Illuminate\Support\Facades\Route;

Route::get('/kategori', 'KategoriController@index');
Route::get('/kategori/{id}', 'KategoriController@show');
Route::post('/kategori', 'KategoriController@store');
Route::post('/kategori/{id}', 'KategoriController@edit');
//Route::post('/kategori/{id}', 'KategoriController@update');
Route::delete('/kategori/{id}', 'KategoriController@destroy');
