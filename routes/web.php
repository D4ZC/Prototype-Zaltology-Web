<?php
use App\Http\Controllers\ItemController;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('main'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/items', 'ItemController@index');
Route::post('/items', 'ItemController@store')->name('items.store');
Route::get('/items/edit/{id}', 'ItemController@editView')->name('items.edit_view');
Route::post('/items/{id}', 'ItemController@edit')->name('items.edit');
Route::delete('/items/{id}', 'ItemController@destroy')->name('items.destroy');
 
//Inicio
Route::get('/home', function(){
    return view('home');
});
Route::get('/items', function(){
    return view('items/index');
});

Route::get('/items/create', function(){   
    return view('items/create');
});

Route::resource('item', ItemController::class);


Route::get('/usuarios', function (){

return view('usuarios');

});



    //CRUD articulos

 /*    // Listado articulos
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

//Elimina Articulo
Route::delete('/articulos', function (Request $request) {
    // dd('llego a metodo store');
     //Recibir datos del articulo
     //Validar datos
     //Guardar a base de datos
     //Redireccionar
     return redirect('/articulos');
 
 }); */






