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

Route::get('/services', 'TCMW\HomeController@services');

Route::get('/about', 'TCMW\HomeController@about');
Route::get('/about_structure', 'TCMW\HomeController@aboutStructure');
Route::get('/about_rpl', 'TCMW\HomeController@aboutPRL');

Route::get('/contact', 'TCMW\HomeController@contact');

Route::get('/login', 'TCMW\HomeController@login');

Route::get('/news', function () {
    $posts = TCG\Voyager\Models\Post::all();
    return view('tcmw\news', ['nav' => 'news'], compact('posts'));
});

Route::get('news/{slug}', function($slug){
    $post = TCG\Voyager\Models\Post::where('slug', '=', $slug)->firstOrFail();
    // $taglessBody = strip_tags($post->body);
	return view('tcmw\news_single', ['nav' => 'news'], compact('post'));
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
