<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('user/', 'UsuarioController@Listar');
Route::get('user/{id}', 'UsuarioController@ListarEspecifico');
Route::post('user/', 'UsuarioController@Criar');
Route::put('user/{id}', 'UsuarioController@Atualizar');
Route::delete('user/{id}', 'UsuarioController@Excluir');