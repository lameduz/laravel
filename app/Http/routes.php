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


Route::group(['domain' => '{blogname}.bloggus.dev'], function()
{
    Route::group(['middleware' => 'blogexist'],function()
    {
        /* Route pour accéder à un blog */
        Route::get('/', 'UsersBlogsController@index');

    });

});

Route::post('blogs/{id}/articles/new',['uses' => 'BlogsArticlesController@postArticle','as' => 'blogs.article.new']);
Route::resource('blogs.articles','BlogsArticlesController');



Route::get('/', 'HomeController@index');
Route::get('register',['uses' => 'UsersController@getRegister', 'as' => 'users.getregister']);
Route::post('register', ['uses' => 'UsersController@postRegister','as' => 'users.postregister']);

Route::get('login', ['uses' => 'UsersController@getLogin', 'as' => 'users.getlogin']);
Route::post('login', ['uses' => 'UsersController@postLogin', 'as' => 'users.postlogin']);


Route::post('profile/edit/desc',['uses' => 'ProfilesController@postProfileDescription','as' => 'profiles.edit.desc']);


Route::get('profile', ['uses' => 'ProfilesController@getIndex', 'as' => 'profiles.index']);
Route::get('profile/edit/{id}', ['uses' => 'ProfilesController@edit', 'as' => 'profiles.edit']);
Route::post('profile/edit/{id}', ['uses' => 'ProfilesController@update', 'as' => 'profiles.update']);
Route::get('profile/{id}',['uses' => 'ProfilesController@show','as' => 'profiles.show']);
Route::post('profile/pic/new',['uses' => 'ProfilesController@postProfilePic','as' => 'profiles.new.pic']);

Route::get('blogs', ['uses' => 'BlogsController@index','as' => 'blogs.index']);
Route::get('blog/new',['uses' => 'BlogsController@create','as' => 'blogs.new']);
Route::post('blog/new',['uses' => 'BlogsController@store','as' => 'blogs.store']);

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/* Route pour accéder au dashboard d'un blog */
Route::get('blog/{id}', ['uses' => 'UsersBlogsController@blogDashBoard','as' => 'blog.dashboard' ]);
Route::get('blog/{id}/settings', ['uses' => 'UsersBlogsController@settings','as' => 'blog.settings']);


