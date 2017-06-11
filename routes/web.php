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
    return view('welcome');
});

Route::get('Home','HomeController@index')->name('Home.index');

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

Route::resource('paises', 'PaisesController');
Route::resource('departamentos', 'DepartamentosController');
Route::resource('bases', 'BasesController');
Route::resource('cargos', 'CargosController');
Route::resource('ciudades', 'CiudadesController');
Route::resource('contactoemp', 'ContactoEmpController');
Route::resource('erroresrecurrentes', 'ErroresRecurrentesController');
Route::resource('estadocliente', 'EstadoClienteController');
Route::resource('estadoemp', 'EstadoEmpController');
Route::resource('maestroclientes', 'MaestroClientesController');
Route::resource('maestroempleados', 'MaestroEmpleadosController');
Route::resource('modalidadesemp', 'ModalidadesEmpController');
Route::resource('procesos', 'ProcesosController');
Route::resource('revisionpross', 'RevisionProssController');
Route::resource('succlientes', 'SucClientesController');
Route::resource('users', 'UserController');