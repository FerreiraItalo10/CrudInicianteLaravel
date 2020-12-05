<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;

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

Route::get('/', HomeController::class);

Route::get('produtos/inserir', [ProdutoController::class, 'create']);

Route::post('produtos/inserir', [ProdutoController::class, 'store']) -> name('registrar_produto');

Route::get('produtos/ver/{id}', [ProdutoController::class, 'show']);

Route::get('produtos/editar/{id}', [ProdutoController::class, 'edit']);

Route::post('produtos/editar/{id}', [ProdutoController::class, 'update']) -> name('alterar_produto');

Route::get('produtos/excluir/{id}', [ProdutoController::class, 'delete']);

Route::post('produtos/excluir/{id}', [ProdutoController::class, 'destroy']) -> name('excluir_produto');



