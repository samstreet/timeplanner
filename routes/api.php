<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::get('/users/{id}', 'UsersController@fetch')->where('id', '[0-9]+');

