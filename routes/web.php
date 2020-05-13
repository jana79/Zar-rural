<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Route::get('/', function () {
   
    return view('inicio');
});

// Autenticación
Auth::routes();

// Home
Route::get('/home', 'HomeController@index');

//Poblaciones
Route::resource('/poblaciones', 'PoblacionesController');


//Contacta
Route::get('/contacta', function(){
    return view("contacta");
});
//Colabora
Route::get('/colabora', function(){
    return view("colabora");
});

// Actividades
Route::resource('/actividades', 'ActividadesController');

//Imágenes
Route::resource('/imagen', 'ImagenesController');

//Comentarios
Route::resource('/comentario', 'ComentariosController');

//Admin
Route::resource('/admin', 'AdminController');
