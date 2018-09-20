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
Route::get('/products/{id}','ProductController@show');//formulario de edicion
Route::middleware(['auth','admin'])->prefix('admin')->namespace('Admin')->group(function () //elimina el prefijo admin de la ruta
{
    Route::get('/products','ProductController@index');//listado de productos //influir pr el servidor que sea post
    Route::get('/products/create','ProductController@create');//crear nuevos productos vista de frmulario  // ver datos que sean get
    Route::post('/products','ProductController@store');//registra los datos
    Route::get('/products/{id}/edit','ProductController@edit');//formulario de edicion
    Route::post('/products/{id}/edit','ProductController@update');//actualizar
//Route::post('/admin/products/{id}/delete','ProductController@destroy');//las rutas get solo se usan para obtener informacion
    Route::delete('/products/{id}','ProductController@destroy');


    Route::get('/products/{id}/images','ImageController@index');//listar
    Route::post('/products/{id}/images','ImageController@store');//registrar
    Route::delete('/products/{id}/images','ImageController@destroy');//form eleliminar
    Route::get('/products/{id}/images/{image}','ImageController@select');//destancar
});

//metodos PATCH DELETE

