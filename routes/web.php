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

Route::get('/', function () {
    return view('layouts.app');
});



/*
Route::get('paises', 'PaisesController@index')->name('paises.index');
Route::get('paises/create', 'PaisesController@create')->name('paises.create');
Route::post('paises', 'PaisesController@store')->name('paises.store');
Route::get('paises/{codpais}', 'PaisesController@show')->name('paises.show');
Route::get('paises/{codpais}/edit', 'PaisesController@edit')->name('paises.edit');
Route::put('paises/{codpais}', 'PaisesController@update')->name('paises.update');
Route::delete('paises/{codpais}','PaisesController@destroy')->name('paises.destroy');
*/


/*
   * Grupo de rutas para el objeto Pais.
 */
/*
Route::Group(['prefix' => 'paises'], function()
{
    Route::get('/', 'PaisesController@index')->name('paises.index');
    Route::get('create', 'PaisesController@create')->name('paises.create');
    Route::post('/', 'PaisesController@store')-> name('paises.store');
    Route::get('{codpais}', 'PaisesController@show')-> name('paises.show');
    Route::get('{codpais}/edit', 'PaisesController@edit')-> name('pais.edit');
    Route::put('{codpais}', 'PaisesController@update')-> name('paises.update');
    Route::delete('{codpais}', 'PaisesController@destroy')-> name('paises.destroy');
});
*/

/*
 * Rutas recursivas para disminuir el trabajo en laravel, no habria que hacer todo lo anterior.
 */

Route::group(['middleware' => 'auth'], function(){

  Route::resource('paises', 'PaisesController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);
  Route::post('/masivo_paises', 'PaisesController@masivo_paises')->name('paises.masivo_paises');

  Route::resource('departamentos', 'DepartamentosController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);
  Route::post('/masivo_departamentos', 'DepartamentosController@masivo_departamentos')->name('departamentos.masivo_departamentos');

  Route::resource('ciudades', 'CiudadesController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);
  Route::post('/masivo_ciudades', 'CiudadesController@masivo_ciudades')->name('ciudades.masivo_ciudades');


  Route::resource('bases', 'BasesController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);
  Route::resource('cargos', 'CargosController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);
  Route::resource('contactoemp', 'ContactoEmpController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);
  Route::resource('erroresrecurrentes', 'ErroresRecurrentesController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);
  Route::resource('estadocliente', 'EstadoClienteController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);
  Route::resource('empestados', 'EmpEstadosController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);
  Route::resource('maestroclientes', 'MaestroClientesController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);
  Route::resource('maestroempleados', 'MaestroEmpleadosController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);
  Route::resource('modalidadesemp', 'ModalidadesEmpController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);
  Route::resource('procesos', 'ProcesosController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);
  Route::resource('revisionpross', 'RevisionProssController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);
  Route::resource('succlientes', 'SucClientesController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);
  Route::resource('users', 'UserController',['only' => ['index', 'store', 'update', 'destroy', 'show']]);



  //Route::post('/', 'DepartamentosController@masivo_departamentos')->name('departamentos.masivo_departamentos');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
