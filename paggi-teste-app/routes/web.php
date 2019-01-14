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

Route::group(['prefix' => 'cartaoCredito'], function(){
    Route::get('/criar', 'CartaoCreditoController@addCartaoCreditoView');
    Route::post('/criar', 'CartaoCreditoController@addCartaoCreditoAction');
    Route::get('/atualizar', 'CartaoCreditoController@updateCartaoCreditoView');
    Route::get('/listar', 'CartaoCreditoController@listarCartoesCredito');
    Route::post('/atualizar', 'CartaoCreditoController@updateCartaoCreditoAction');
    Route::post('/deletar', 'CartaoCreditoController@deletarCartaoCreditoAction');
    Route::get('/buscar', 'CartaoCreditoController@getCartaoCredito');
});

