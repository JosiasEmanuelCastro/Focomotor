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

Route::view('/', 'inicio')->name('inicio');
Route::view('listado', 'listado')->name('listado');
Route::view('publicar', 'publicar')->name('publicar');
Route::view('planes', 'planes')->name('planes');
Route::view('ayuda', 'info.ayuda')->name('ayuda');

Route::view('politica-de-privacidad', 'info.politica_de_privacidad')->name('politica');
Route::view('preguntas-frecuentes', 'info.preguntas_frecuentes')->name('preguntas');
Route::view('terminos-y-condiciones', 'info.terminos_y_condiciones')->name('terminos');

Route::view('contacto', 'info.contacto')->name('contacto');
Route::view('ingresar', 'ingresar')->name('ingresar');
Route::view('registro', 'registro')->name('registro');

Route::view('exampleVehicle', 'vehiculosTemplate')->name('vehiculo');









