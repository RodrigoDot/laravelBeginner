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

Route::get('/', function () {
    return view('welcome');
});

/*
A simple request
Route::get('/hello', function() {
   return 'Hello World';
});

A request passing parameters through the url
Route::get('/hello/{name}', function($name) {
  return 'Hello ' .  $name;
});

A request passing parameters through the url and defining a default value
Route::get('/hello/{name?}', function($name = 'World') {
  return 'Hello ' .  $name;
});
*/

Route::get('/hello/{name?}', 'HelloController@index');
Route::post('/hello/{name?}', 'HelloController@show');
Route::resource('pages', 'Admin\PagesController');
 
