<?php

use Illuminate\Support\Facades\Route;

Route::get('/pengguna', 'PenggunaController@index');
Route::get('/pengguna/{id}', 'PenggunaController@show');
Route::post('/pengguna', 'PenggunaController@store');
Route::post('/pengguna/{id}', 'PenggunaController@edit');
//Route::post('/pengguna/{id}', 'PenggunaController@update');
Route::delete('/pengguna/{id}', 'PenggunaController@destroy');
