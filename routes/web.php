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


        Route::get('cursos/editar/{curso}', 'CursoController@edit');
        Route::get('cursos/lista', 'CursoController@list');
        Route::get('cursos/crear', 'CursoController@create');
        Route::get('cursos', 'CursoController@index');
        Route::get('cursos/{curso}', 'CursoController@show');
        Route::post('cursos', 'CursoController@store');
        Route::patch('cursos/{curso}', 'CursoController@update');
        Route::delete('cursos/{curso}', 'CursoController@destroy');


        Route::get('niveles/editar/{nivel}', 'NivelController@edit');
        Route::get('niveles/lista', 'NivelController@list');
        Route::get('niveles', 'NivelController@index1');
        Route::get('niveles/crear', 'NivelController@create');
        Route::get('niveles/{nivel}', 'NivelController@show');
        Route::post('niveles', 'NivelController@store');
        Route::patch('niveles/{nivel}', 'NivelController@update');
        Route::delete('niveles/{nivel}', 'NivelController@destroy');
        // lECCIONES.
        Route::get('lecciones/editar/{leccion}', 'LeccionController@edit');
        Route::get('lecciones/lista', 'LeccionController@list');
        Route::get('lecciones', 'LeccionController@index1');
        Route::get('lecciones/crear', 'LeccionController@create');
        Route::get('lecciones/{leccion}', 'LeccionController@show');
        Route::post('lecciones', 'LeccionController@store');
        Route::patch('lecciones/{leccion}', 'LeccionController@update');
        Route::delete('lecciones/{leccion}', 'LeccionController@destroy');
