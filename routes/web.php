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

//rutas con controlador
//PRODUCTO
Route::get('/','App\Http\Controllers\ProductoController@index');
Route::get('/productos','App\Http\Controllers\ProductoController@create')->name('productos.create');
Route::post('/productos','App\Http\Controllers\ProductoController@store')->name('productos.store');

//CLIENTE
Route::get('/clientes','App\Http\Controllers\ClienteController@index');
Route::get('/cliente','App\Http\Controllers\ClienteController@create')->name('cliente.create');
Route::post('/cliente','App\Http\Controllers\ClienteController@store')->name('cliente.store');
Route::get('/cliente/{numero_documento}/{idtipos_documentos}','App\Http\Controllers\ClienteController@edit')->name('cliente.edit');
Route::put('/cliente/{numero_documento}/{idtipos_documentos}','App\Http\Controllers\ClienteController@update')->name('cliente.update');
Route::delete('/cliente/{numero_documento}/{idtipos_documentos}','App\Http\Controllers\ClienteController@destroy')->name('cliente.destroy');


