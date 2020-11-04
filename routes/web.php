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
    //CRUD articulos

    // Listado articulos
Route::get('/articulos', function(){
    return view('articulos/articulosIndex');
});
    
    // Formulario Nuevo articulo
Route::get('/articulos/create', function(){
    
return view('articulos/articuloForm');
});

//Guarda Articulo
Route::post('/articulos', function (Request $request) {
   // dd('llego a metodo store');
    //Recibir datos del articulo
    //Validar datos
    //Guardar a base de datos
    //Redireccionar
    return redirect('/articulos');

});