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
    return view('template');
});

Route::get('/teste/testes/{numero?}', 'TesteController@exibir');
Route::get('/Estado/novo', 'EstadoController@novo');
Route::post('/Estado/salvar', 'EstadoController@salvar');

Route::get('tarefa1', 'Tarefa1Controller@index');
Route::post('/tarefa1/questao1', 'Tarefa1Controller@questao1')->name('tarefa1.questao1');