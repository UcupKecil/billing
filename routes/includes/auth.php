<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'guest',
], function() {
    // Route::get('/', 'AuthController@view');
    Route::post('/login', 'AuthController@login');
});

Route::group([
    'middleware' => 'auth',
], function() {
    Route::get('/logout', 'AuthController@logout');
});


// Route::group([
//     'middleware' => 'guest',
// ], function() {
//     Route::get('/', 'AuthController@view');
//     Route::post('/', 'AuthController@login');
//     Route::post('/register', 'AuthController@register');

//     Route::get('/register', function () {
//         return view('components/forms/register');
//     });
// });

// Route::group([
//     'middleware' => 'auth',
// ], function() {
//     require_once('includes/product.php');
//     require_once('includes/berita.php');
//     require_once('includes/kategori.php');
// });

// Route::group([
//     'middleware' => 'auth',
// ], function() {
//     Route::get('/logout', 'AuthController@logout');
// });
