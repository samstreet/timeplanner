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

Route::get( '/', 'HomeController@index' );
Route::get( '/logout', 'Auth\LoginController@logout' );
Auth::routes();

Route::group(  [ 'middleware' => [ 'auth' ] ], function () {
    Route::get( '/user/dashboard', 'DashboardController@index' );
    Route::get( '/user/to-do', 'ToDoController@index' )->name( 'user-todo' );
    Route::get( '/user/tasks', 'TaskController@index' )->name( 'user-tasks' );
    Route::get( '/user/statistics', 'StatisticsController@index' )->name( 'user-stats' );
} );