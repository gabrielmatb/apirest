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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clients/index', 'App\Http\Controllers\ClientController@index')->name('listar_clients');
Route::post('/clients/index', 'App\Http\Controllers\ClientController@store')->name('registrar_client');
Route::get('/clients/ver/{id}', 'App\Http\Controllers\ClientController@show')->name('ver_client');
Route::post('/clients/editar', 'App\Http\Controllers\ClientController@update')->name('alterar_client');
Route::post('/clients/excluir', 'App\Http\Controllers\ClientController@destroy')->name('excluir_client');