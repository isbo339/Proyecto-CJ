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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/variables', 'catalogosController');

Route::resource('/valorescatalogos', 'valores_catalogosController');

Route::resource('/materias', 'materiasController');

Route::resource('/distritos','distritosController');

