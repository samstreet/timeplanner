<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/users/{id}', 'API\UsersController@fetch')->where('id', '[0-9]+');
    Route::post('/users', 'API\UsersController@create');
    Route::put('/users/{id}', 'API\UsersController@create')->where('id', '[0-9]+');
    Route::delete('users/{id}', 'API\UsersController@delete')->where('id', '[0-9]+');;
});

