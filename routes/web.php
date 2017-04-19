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

// Post routes
Route::get('posts/create', ['uses' => 'PostController@create', 'as' => 'posts.create']);
Route::get('posts/{id}', ['uses' => 'PostController@show', 'as' => 'posts.show']);
Route::get('posts', ['uses' => 'PostController@index', 'as' => 'posts.index']);