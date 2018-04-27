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

Route::get('/', 'PostsController@all')->name('allPost');

Route::group(['middleware' => 'auth'], function () {
	Route::get('/addPost', 'PostsController@form')->name('addPost');
	Route::post('/store', 'PostsController@store')->name('storePost');
});

Route::get('/singlePost/{id}', 'PostsController@single')->name('singlePost');

Route::get('/editPost/{id}', 'PostsController@editform')->name('editPost');
Route::post('/updateAction/{id}', 'PostsController@updateAction')->name('updatePost');

Route::get('/deletePost/{id}', 'PostsController@delete')->name('deletePost');

Route::get('/users', 'UserController@all')->name('users');
Route::get('/userPost/{id}', 'UserController@userPost')->name('userPost');

Route::get('/edituser', 'UserController@edit')->name('edituser');
Route::post('/edituserAction', 'UserController@update')->name('edituserAction');
Route::get('/deleteuser', 'UserController@delete')->name('deleteuser');

Route::get('/userCreate', 'UserController@create')->name('createPost');


Auth::routes();
