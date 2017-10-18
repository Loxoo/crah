<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

//route pour HOME
Route::get('home',['as' => 'home.index' , 'uses' => 'HomeController@index']);

//route pour USER
Route::get('user',['as' => 'users.index' , 'uses' => 'UserController@index']);
Route::get('user/modification/{id}',['as' => 'users.edit' , 'uses' => 'UserController@edit']);
Route::post('user/update/{id}',['as' => 'users.update' , 'uses' => 'UserController@update']);


