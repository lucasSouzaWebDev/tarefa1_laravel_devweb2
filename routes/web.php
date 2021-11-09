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
Route::post('/tarefa1/questao2', 'Tarefa1Controller@questao2')->name('tarefa1.questao2');
Route::post('/tarefa1/questao3', 'Tarefa1Controller@questao3')->name('tarefa1.questao3');
Route::post('/tarefa1/questao4', 'Tarefa1Controller@questao4')->name('tarefa1.questao4');
Route::post('/tarefa1/questao5', 'Tarefa1Controller@questao5')->name('tarefa1.questao5');
Route::post('/tarefa1/questao6', 'Tarefa1Controller@questao6')->name('tarefa1.questao6');