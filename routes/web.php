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

Route::get('/', 'TestController@welcome');

Route::get('/prueba', function () {
    return 'Hola soy la ruta de prueba';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/products','ProductController@index');//listado de productos //influir pr el servidor que sea post
Route::get('/admin/products/create','ProductController@create');//crear nuevos productos vista de frmulario  // ver datos que sean get
Route::post('/admin/products','ProductController@store');//registra los datos
Route::get('/admin/products/{id}/edit','ProductController@edit');//formulario de edicion
Route::post('/admin/products/{id}/edit','ProductController@update');//actualizar
