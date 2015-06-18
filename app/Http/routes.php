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


Route::get('/', 'HomeController@index');
Route::get('register',['uses' => 'UsersController@getRegister', 'as' => 'users.getregister']);
Route::post('register', ['uses' => 'UsersController@postRegister','as' => 'users.postregister']);

Route::get('login', ['uses' => 'UsersController@getLogin', 'as' => 'users.getlogin']);
Route::post('login', ['uses' => 'UsersController@postLogin', 'as' => 'users.postlogin']);


Route::get('profile', ['uses' => 'ProfilesController@getIndex', 'as' => 'profiles.index']);
Route::get('profile/edit', ['uses' => 'ProfilesController@getEdit', 'as' => 'profiles.edit']);
Route::post('profile/edit/{id}', ['uses' => 'ProfilesController@postEdit', 'as' => 'profiles.edit']);
Route::get('profile/{id}',['uses' => 'ProfilesController@show','as' => 'profiles.show']);


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

