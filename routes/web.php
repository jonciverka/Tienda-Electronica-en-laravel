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


Route::get('/','FrontController@index');
Route::get('login','FrontController@login');
Route::get('all','FrontController@all');
Route::get('admin/productos','AdminController@productos');
Route::post('admin/storeProductos','AdminController@storeProductos')
     ->name('admin.storeProductos');
Route::resource('admin','AdminController');
Route::get('cliente/all_cliente','ClienteController@all_cliente');
Route::get('cliente/carrito','ClienteController@carrito');
Route::resource('cliente','ClienteController');
Route::resource('empleado','EmpleadoController');
Route::resource('log','LogController');
Route::get('logout','LogController@logout');
