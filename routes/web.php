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

use App\Productos2;

Route::get('/', function () {
    return view('app');
});

Route::get('/miruta',function(){

echo('hola esta es la ruta que creastes..');
});

Route::get('/saludo/{nombre}/{apellido?}',function($nombre, $apellido='(no hay apellido)'){
    echo'hola '.$nombre.' '.$apellido;
});
/*
//----------------------vista de las vista normales-----------------------//
Route::get('/marcas',
'MarcasController@index');

Route::get('/categorias',
'CategoriasController@index');

Route::get('/productos',
'ProductosController@index');


//----------------------vista de formularios----------------------------//
Route::get('/formulariomarcas',
'MarcasController@index2');

Route::get('/formulariocategorias',
'CategoriasController@index2');

Route::get('/formularioproductos',
'ProductosController@index2');
*/

//--------------------------Marcas---------------------------------//

Route::get('marcas', 'MarcasController@index')
->name('marcas.index');


Route::get('marcas/create', 'MarcasController@create')
->name('marcas.create');

Route::post('marcas/store', 'MarcasController@store')
->name('marcas.store');


Route::get('marcas/{id}', 'MarcasController@show')
->name('marcas.show');


Route::get('marcas/{id}/edit', 'MarcasController@edit')
->name('marcas.edit');


Route::put('marcas/{id}', 'MarcasController@update')
->name('marcas.update');

Route::delete('marcas/{id}','MarcasController@delete')
->name('marcas.delete');







//----------------------------Productos-------------------------------------//


Route::get('cosmeticos', 'CosmeticosController@index')
->name('cosmeticos.index');


Route::get('cosmeticos/create', 'CosmeticosController@create')
->name('cosmeticos.create');

Route::post('cosmeticos/store', 'CosmeticosController@store')
->name('cosmeticos.store');


Route::get('cosmeticos/{id}', 'CosmeticosController@show')
->name('cosmeticos.show');


Route::get('cosmeticos/{id}/edit', 'CosmeticosController@edit')
->name('cosmeticos.edit');


Route::put('cosmeticos/{id}', 'CosmeticosController@update')
->name('cosmeticos.update');

Route::delete('cosmeticos/{id}','CosmeticosController@delete')
->name('cosmeticos.delete');


//--------------------------Categorias---------------------------------//

Route::get('categorias', 'CategoriasController@index')
->name('categorias.index');


Route::get('categorias/create', 'CategoriasController@create')
->name('categorias.create');

Route::post('categorias/store', 'CategoriasController@store')
->name('categorias.store');


Route::get('categorias/{id}', 'CategoriasController@show')
->name('categorias.show');


Route::get('categorias/{id}/edit', 'CategoriasController@edit')
->name('categorias.edit');


Route::put('categorias/{id}', 'CategoriasController@update')
->name('categorias.update');

Route::delete('categorias/{id}','CategoriasController@delete')
->name('categorias.delete');
