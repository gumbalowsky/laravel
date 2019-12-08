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
    return view('post');
});
Route::get('/test/', function(){
  return view('test');
});

//Route::get('/post/{imie}', ['uses' =>'PostsController@podajimie']);

// Route::resource('posts', 'PostsController');
Route::get('/contact', 'PostsController@showView');
Route::get('/post/{id}', 'PostsController@showPost');
