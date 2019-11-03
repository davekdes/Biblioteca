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

use App\Http\Controllers\PermisoController;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::get('foo', function () {
  return 'Hello World';
});
*/

//Route::get('permiso', 'PermisoController@index');
//Route::view('permiso', 'permiso');

//Route::get('permiso/{nombre}/{slug?}', 'PermisoController@index');
//Route::get('admin/sistema/permiso', 'PermisoController@index')->name('permiso');

Route::get('permiso/{nombre}', function ($nombre) {
    return $nombre;
})->where('nombre', '[0-9]+')->name('permiso');