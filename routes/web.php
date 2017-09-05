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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UserController');
Route::get('asignar_apoderado/{id}', 'UserController@asignar_apoderado')->name('asignar_apoderado');
Route::get('restablecer_pass', 'UserController@restablecer_pass')->name('restablecer_pass');
Route::get('add_apoderado/{id}', 'UserController@add_apoderado')->name('add_apoderado');

Route::resource('curso', 'CursoController');
Route::get('add_educadora/{id}', 'CursoController@add_educadora')->name('add_educadora');
Route::get('set_educadora/{id}', 'CursoController@set_educadora')->name('set_educadora');

Route::resource('informe', 'InformeController');
Route::get('copiar_informe/{id}', 'InformeController@copiar')->name('copiar_informe');


Route::resource('alumno', 'AlumnoController');
Route::resource('informe', 'InformeController');
Route::resource('area', 'AreaController');
Route::resource('subarea', 'SubareaController');
Route::resource('indicador', 'IndicadorController');
Route::resource('resultado', 'ResultadoController');

Route::get('cambiopass', function () {
    return view('auth.cambiopass');
})->name('cambiopass');

Route::post('cambiapass', 'HomeController@update')->name('cambiapass');
