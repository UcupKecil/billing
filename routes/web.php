<?php

use Illuminate\Support\Facades\Route;


require_once('includes/auth.php');
require_once('includes/author.php');
require_once('includes/product.php');
require_once('includes/berita.php');
require_once('includes/kategori.php');
require_once('includes/pengguna.php');
require_once('includes/role.php');


Route::get('/', function () {
    return view('components/templates/master');
});


// Frontend Routes
Route::get('/home', 'FrontendController@index');
Route::get('/blog-detail/{slug}','FrontendController@blogDetail')->name('blog.detail');
Route::get('/berita-{judul}', 'FrontendController@berita');
Route::get('/pages-{semua}', 'FrontendController@semua');
Route::get('/petasitus-{lang}','FrontendController@peta')->name('petasitus');
Route::get('/paginate','FrontendController@paginate');
Route::get('/pengumuman-{peng}','FrontendController@pengumuman');

Route::get('/about-us','FrontendController@aboutUs')->name('about-us');
Route::get('/contact','FrontendController@contact')->name('contact');
Route::post('/contact/message','MessageController@store')->name('contact.store');
Route::get('product-detail/{slug}','FrontendController@productDetail')->name('product-detail');
Route::post('/product/search','FrontendController@productSearch')->name('product.search');
Route::get('/berita-search','FrontendController@beritaSearch')->name('berita.search');
Route::get('/product-cat/{slug}','FrontendController@productCat')->name('product-cat');
Route::get('/product-sub-cat/{slug}/{sub_slug}','FrontendController@productSubCat')->name('product-sub-cat');
Route::get('/product-brand/{slug}','FrontendController@productBrand')->name('product-brand');

Route::get('/','FrontendController@home')->name('home');
Route::get('user/login','FrontendController@login')->name('login.form');
Route::get('user/register','FrontendController@register')->name('register.form');
Route::get('/blog/search','FrontendController@blogSearch')->name('blog.search');
Route::post('/subscribe','FrontendController@subscribe')->name('subscribe');

// Frontend Routes
Route::get('/home', 'FrontendController@index');





// Route::get('/news', function () {
//     return view('components/products/news');
// });
