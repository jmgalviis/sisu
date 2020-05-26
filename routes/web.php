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

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/incidencia', 'HomeController@create')->name('crear.incidencia');
Route::post('/incidencia/guardar', 'HomeController@store')->name('guardar.incidencia');
Route::get('/incidencia/{incidencia}', 'HomeController@show')->name('ver.incidencia');
Route::post('/incidencia/comentario', 'HomeController@agregarcomentario')->name('agregar.comentario');

Route::prefix('admin')->group(function (){
    Route::middleware(['auth'])->group(function (){
        Route::resources([
            'users' => 'Admin\UserController',
            'roles' => 'Admin\RoleController',
            'incidencia' => 'Admin\IncidenciaController'
        ]);

        Route::get('/admin', 'Admin\AdminController@index')->name('index.admin');

    });
});

