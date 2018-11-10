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

Route::get('/home','CrudController@create');
Route::post('/save','CrudController@store');
Route::get('/posts','CrudController@index');
Route::get('/posts/show/{post}','CrudController@show');
Route::get('/posts/{id}/edit','CrudController@edit');
Route::post('/posts/update','CrudController@update');
Route::get('/posts/{id}/delete/','CrudController@destroy');
Route::get('/contact','CrudController@contact');
Route::get('/about', 'CrudController@about');

