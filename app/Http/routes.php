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

Route::put('user/modification/{id}',['as' => 'users.edit' , 'uses' => 'UserController@edit']);
Route::post('user/update/{id}',['as' => 'users.update' , 'uses' => 'UserController@update']);

Route::put('user/creation',['as' => 'users.create' , 'uses' => 'UserController@create']);
Route::post('user/store',['as' => 'users.store' , 'uses' => 'UserController@store']);

//Route pour Rôles
Route::get('role',['as' => 'roles.index' , 'uses' => 'RoleController@index']);

Route::get('role/deleted',['as' => 'roles.deleted' , 'uses' => 'RoleController@deleted']);

Route::put('role/modification/{id}',['as' => 'roles.edit' , 'uses' => 'RoleController@edit']);
Route::post('role/update/{id}',['as' => 'roles.update' , 'uses' => 'RoleController@update']);

Route::put('role/creation',['as' => 'roles.create' , 'uses' => 'RoleController@create']);
Route::post('role/store',['as' => 'roles.store' , 'uses' => 'RoleController@store']);

Route::put('role/suppression/{id}',['as' => 'roles.delete' , 'uses' => 'RoleController@delete']);
Route::post('role/suppression/{id}',['as' => 'roles.delete' , 'uses' => 'RoleController@delete']);

Route::put('role/annuler/{id}',['as' => 'roles.revert' , 'uses' => 'RoleController@revert']);
Route::post('role/annuler/{id}',['as' => 'roles.revert' , 'uses' => 'RoleController@revert']);
