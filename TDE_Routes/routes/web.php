<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/fornecedores', 'App\Http\Controllers\FornecedoresController@index');
Route::get('/fornecedores/adicionar', 'App\Http\Controllers\FornecedoresController@create');
Route::post('/fornecedores/adicionar', 'App\Http\Controllers\FornecedoresController@store');

Route::get('/clientes', 'App\Http\Controllers\ClientesController@index');
Route::get('/clientes/adicionar', 'App\Http\Controllers\ClientesController@create');
Route::post('/clientes/adicionar', 'App\Http\Controllers\ClientesController@store');

Route::get('/compras', 'App\Http\Controllers\ComprasController@index');
Route::get('/compras/adicionar', 'App\Http\Controllers\ComprasController@create');
Route::post('/compras/adicionar', 'App\Http\Controllers\ComprasController@store');

Route::get('/vendas', 'App\Http\Controllers\VendasController@index');
Route::get('/vendas/adicionar', 'App\Http\Controllers\VendasController@create');
Route::post('/vendas/adicionar', 'App\Http\Controllers\VendasController@store');

Route::get('/produtos', 'App\Http\Controllers\ProdutosController@index');
Route::get('/produtos/adicionar', 'App\Http\Controllers\ProdutosController@create');
Route::post('/produtos/adicionar', 'App\Http\Controllers\ProdutosController@store');

Route::get('/relatorios', 'App\Http\Controllers\RelatoriosController@index');
Route::get('/relatorios/adicionar', 'App\Http\Controllers\RelatoriosController@create');

