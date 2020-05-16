<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Actividad as Actividad;

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

//Inicio
//Inicio
Route::get('/', function () {
    $actividades = Actividad::all();
    $contador = 3;
    return view('inicio', compact('actividades', 'contador'));
});

// Autenticación
Auth::routes();

// Home
Route::get('/home', 'HomeController@index');

//Poblaciones
Route::resource('/poblacion', 'PoblacionController');

//Contacta
Route::get('/contacta', function() {
    return view("contacta");
});

//Respuesta al contacto
Route::get('/respuesta', function() {
    return view("respuesta");
});

//Colabora
Route::get('/colabora', function() {
    return view("colabora");
});

// Actividades
Route::get('/actividad/patrimonio', 'ActividadController@patrimonio');
Route::get('/actividad/naturaleza', 'ActividadController@naturaleza');
Route::get('/actividad/ocio', 'ActividadController@ocio');
Route::get('/actividad/tradicion', 'ActividadController@tradicion');
Route::resource('/actividad', 'ActividadController');

//Imágenes
Route::get('/imagen/{id}','ImagenController@add');
Route::resource('/imagen', 'ImagenController');

//Comentarios
Route::get('/comentario/{id}','ComentarioController@add');
Route::resource('/comentario', 'ComentarioController');

//Admin
Route::resource('/admin', 'AdminController');


