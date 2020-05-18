<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome'); 
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post/create', 'PostController@create');

//
// Route::post('/post', 'PostController@store')->name('file');
//

Route::post('/post', 'PostController@store');

Route::get('/warn', 'IndexController@warn');
Route::get('/post/{post}', 'PostController@show');//->name('file');

Route::get('/public', 'IndexController@public');
// Route::post('/public', 'PostController@upload');


Route::get('/news', 'IndexController@news');
Route::get('/nope', 'IndexController@nope');


Route::get('/about', 'IndexController@about');
Route::get('/more', 'IndexController@more');
Route::get('/history', 'IndexController@history');
Route::get('/record', 'IndexController@record');
Route::get('/contact', 'IndexController@contact');
Route::get('/live', 'IndexController@live');
