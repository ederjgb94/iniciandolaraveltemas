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

Route::get('/prueba', function () {
    return view('prueba');
});

Route::resource('/perros', 'App\Http\Controllers\PerroController');


Route::get('/productos', 'App\Http\Controllers\ProductoController@verTodos');
Route::get('/productos/edit', 'App\Http\Controllers\ProductoController@editar')
    ->name('productos.edit');


Route::get('/escuelas', 'App\Http\Controllers\EscuelaController@verEscuelas');
Route::get('/escuelas/editar/{escuela}', 'App\Http\Controllers\EscuelaController@editar')
    ->name('escuelas.edit');

Route::put('/escuelas/editar/{escuela}/update', 'App\Http\Controllers\EscuelaController@update')->name('escuelas.update');
