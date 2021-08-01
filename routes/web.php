<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'AuthsController@index')->name('login');

Route::post('/postlogin', 'AuthsController@postlogin');

Route::group(['middleware' => 'auth'], function () {
    //middleware digunakan untuk mengamankan halaman url sebelum login
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/dashboarduser', 'DashboardController@dashboard');
    // users
    Route::get('/users', 'UsersController@index');
    Route::get('/users/create', 'UsersController@create');
    Route::get('/users/{user}', 'UsersController@show');
    Route::post('/users', 'UsersController@store');
    Route::delete('/users/{user}', 'UsersController@destroy');
    Route::get('/users/{user}/edit', 'UsersController@edit');
    Route::patch('/users/{user}', 'UsersController@update');
    //proyect
    Route::get('/proyects', 'ProyectsController@index');
    Route::get('/proyects/create', 'ProyectsController@create');
    Route::post('/proyects', 'ProyectsController@store');
    Route::get('/proyects/print', 'ProyectsController@print');
    //Maps
    Route::get('/maps/{proyect}', 'ProyectsController@maps');
});
