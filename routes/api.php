<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/trailer', 'App\Http\Controllers\TrailerController@index');
// Route::post('/trailer', 'App\Http\Controllers\TrailerController@store');
// Route::get('/trailer/{id}', 'App\Http\Controllers\TrailerController@show');
// Route::put('/trailer/{id}', 'App\Http\Controllers\TrailerController@update');
// Route::delete('/trailer/{id}', 'App\Http\Controllers\TrailerController@destroy');

Route::apiResource('trailers', 'App\Http\Controllers\TrailerController');

// Route::get('/productos', 'App\Http\Controllers\ProductoController@index');
// Route::get('/productos/{producto}', 'App\Http\Controllers\ProductoController@show');


Route::apiResource('productos', 'App\Http\Controllers\ProductoController');

//ruta para obtener de un alumno su escuela
Route::get('/alumnos/{alumno}/escuela', 'App\Http\Controllers\AlumnoController@escuela');

//ruta para obtener los alumnos de una escuela
Route::get('/escuelas/{escuela}/alumnos', 'App\Http\Controllers\EscuelaController@alumnos');

Route::post(
    '/escuelas/{escuela}/alumnos/{alumno}',
    'App\Http\Controllers\EscuelaController@guardarAlumno'
);
