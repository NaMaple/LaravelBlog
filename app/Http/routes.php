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

<<<<<<< 2d837a59765fa0e0f9be2c2e036190c768bb2b63
Route::get('/', function () {
    return view('welcome');
});
=======
Route::group(['Middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/mysql', 'IndexController@mysql');

    Route::get('admin/login', 'Admin\LoginController@login');

});


>>>>>>> login页面提交
