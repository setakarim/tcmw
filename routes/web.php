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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'TCMW\HomeController@home');

Route::get('/services', 'TCMW\ServicesController@services');

Route::get('/services/{slug}', 'TCMW\ServicesController@show');

Route::get('/about', 'TCMW\HomeController@about');

Route::get('/contact', 'TCMW\HomeController@contact');

Route::post('/contact/sent', 'TCMW\HomeController@sentMessage');

Route::get('/login', 'TCMW\HomeController@login');

Route::get('/news', 'TCMW\NewsController@news');

Route::get('/news/{slug}', 'TCMW\NewsController@show');

Route::get('/news/category/{slug}', 'TCMW\NewsController@category');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
