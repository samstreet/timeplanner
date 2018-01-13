<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::post('/users', 'API\UsersController@create');

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/users', 'API\UsersController@fetchAll');
    Route::get('/users/{id}', 'API\UsersController@fetch')->where('id', '[0-9]+');
    Route::put('/users/{id}', 'API\UsersController@update')->where('id', '[0-9]+');
    Route::delete('users/{id}', 'API\UsersController@delete')->where('id', '[0-9]+');;


    Route::get('/assignments', 'API\AssignmentsController@fetch');
    Route::get('/assignments/{id}', 'API\AssignmentsController@fetch')->where('id', '[0-9]+');
    Route::post('/assignments', 'API\UsersController@create');
    Route::put('/assignments/{id}', 'API\UsersController@update')->where('id', '[0-9]+');
    Route::delete('assignments/{id}', 'API\UsersController@delete')->where('id', '[0-9]+');
});

