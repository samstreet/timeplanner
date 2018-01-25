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


    Route::get('/assignments', 'API\AssignmentsController@fetchAll');
    Route::get('/assignments/{id}', 'API\AssignmentsController@fetch')->where('id', '[0-9]+');
    Route::post('/assignments', 'API\UsersController@create');
    Route::put('/assignments/{id}', 'API\UsersController@update')->where('id', '[0-9]+');
    Route::delete('assignments/{id}', 'API\UsersController@delete')->where('id', '[0-9]+');

    Route::get('/to-do', 'API\ToDosController@fetchAll');
    Route::get('/to-do/{id}', 'API\ToDosController@fetch')->where('id', '[0-9]+');
    Route::post('/to-do', 'API\ToDosController@create');
    Route::put('/to-do/{id}', 'API\ToDosController@update')->where('id', '[0-9]+');
    Route::delete('to-do/{id}', 'API\ToDosController@delete')->where('id', '[0-9]+');
});

