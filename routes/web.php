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
Route::get('/', 'UsuarioController@login')->name('usuarios.login');
Route::post('logear', 'UsuarioController@logear')->name('usuarios.logear');
Route::get('home', 'UsuarioController@home')->name('layouts.app');
Route::get('logout', 'UsuarioController@logout')->name('usuarios.logout');
Route::get('usuarios/{id}/{estado}/cambiarEstado', 'UsuarioController@cambiarEstado')->name('usuarios.cambiarEstado');
Route::resource('usuarios', 'UsuarioController', ['only' => ['index', 'show', 'create', 'store', 'edit', 'update']]);

Route::resource('autores', 'AutorController');

//Route::get('/', function () {
//    return view('layouts.app');
//});
