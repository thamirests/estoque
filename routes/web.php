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
Route::get('/','ProdutoController@Lista');

Route::get('/produtos', 'ProdutoController@Lista');

Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra')->where('id', '[0-9]+');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove')->where('id', '[0-9]+');
Route::get('/produtos/formulario', 'ProdutoController@formulario');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
Route::get('/login', 'EntrarController@form');
Route::post('/login', 'EntrarController@login');
//Route::get('/auth/register', 'LoginController@register');
Route::get('/produtos/json', 'ProdutoController@listaJson');

Route::get('/produtos/alterar/{id}', 'ProdutoController@alterar')->where('id', '[0-9]+');
Route::post('/produtos/alterado/{id}', 'ProdutoController@alterado');
Auth::routes();

Route::get('/home', 'ProdutoController@Lista');
