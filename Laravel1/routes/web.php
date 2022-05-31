<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\CarroController;

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
Route::get('/you', function () {

    $nome="ismael";

    return view('teste', ['nome' => $nome]);
});
Route::get('/index', function(){

    return view('index');
});
Route::get('/registro2', function(){
    //dd($events);
    return view('index');
});

Route::get('/registro',[EventController::class,'index']);

//-------------------------------------------------------------
Route::post('/events',[EventController::class,'store']);

Route::get('/events/create',[EventController::class,'create']);

//EVENTO DE REGISTRO--------------------------------------------

Route::post('/evento',[LoginController::class,'store1']);

Route::get('/events/registro',[LoginController::class,'registro']);

//TELA DE LOGIN-------------------------------------------------->name('login')

Route::post('/login',[LoginController::class,'login'])->name('login');

Route::get('/login',[LoginController::class,'show'])->name('paginas.login');


//TELA LISTA DE LOGIN

Route::get('/listaLogin',[LoginController::class,'lista']);

Route::get('/lista',[LoginController::class,'listagem']);

//EVENTO DE EDITAR

Route::get('/editar-cadastro/{id}', [LoginController::class,'edits']);

Route::post('/editar-cadastro/{id}', [LoginController::class,'edit']);

//EVENTO DE CADASTRAR PRODUTO

Route::get('/events/cadastroProdutos', [ProdutoController::class,'cadastroProduto']);

Route::post('/events/cadastroProdutos',[ProdutoController::class,'produto']);

//EVENTO DE IMPRIMIR O RELATORIO

Route::get('/events/impressao',[ProdutoController::class,'imp']);

//EVENTO DE DELETAR O CADASTRO

Route::delete('/listaLogin/{id}', [LoginController::class,'destroy']);

//TELA REGISTRO DE USUARIO EXTERNO

Route::post('/usuario_externo',[LoginController::class,'store2']);

Route::get('/registro_usuario',[LoginController::class,'registro1']);

//TELA FORMULÁRIO DE CONTATO

Route::post('/contato_index',[LocalController::class,'store3']);

Route::get('/contato_index',[LocalController::class,'registro3']);

Route::get('/contato_index',[LocalController::class,'proc']);

//TELA DE HOME

Route::get('/home', function () {
    return view('layouts.dash_principal');
});

//TELA DE MARKET

Route::get('/loja', function(){

    return view('paginas.market');
});

Route::get('/loja',[ProdutoController::class,'query']);


//EVENTO DE CARRINHO
Route::post('/finalizar-compra',[CarroController::class,'store']);

Route::get('/finalizar-compra',[CarroController::class,'show']);
