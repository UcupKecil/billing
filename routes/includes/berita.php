<?php

use Illuminate\Support\Facades\Route;

Route::get('/berita', 'BeritaController@index');
Route::get('/berita/{id}', 'BeritaController@show');
Route::post('/berita', 'BeritaController@store');
Route::post('/berita/{id}', 'BeritaController@edit');
//Route::post('/berita/{id}', 'BeritaController@update');
Route::delete('/berita/{id}', 'BeritaController@destroy');
