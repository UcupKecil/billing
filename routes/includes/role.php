<?php

use Illuminate\Support\Facades\Route;

Route::get('/role', 'RoleController@index');
Route::get('/role/{id}', 'RoleController@show');
Route::post('/role', 'RoleController@store');
Route::post('/role/{id}', 'RoleController@edit');
//Route::post('/role/{id}', 'RoleController@update');
Route::delete('/role/{id}', 'RoleController@destroy');
