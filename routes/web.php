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

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/', function () {
    return "Buenas a todos guapisimos, aquu vejeta SETESIENTOSSETENTAYSIETE";
});

Route::get('saludo/{nombre?}', function($nombre = "Guest"){
    return "hoy estas muy fachero:". $nombre;
}); */
Route::get('/', function () {
    return view('home');
})->name('home');  

Route::view('/ayuda', 'ayuda');
Route::view('/micuenta', 'micuenta');
Route::view('/mihistorial', 'mihistorial');
Route::view('/misviajes', 'misviajes');