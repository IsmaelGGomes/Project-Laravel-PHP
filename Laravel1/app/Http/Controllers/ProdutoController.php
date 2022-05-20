<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    
    /* TELA CADASTRAR PRODUTO */

    public function cadastroProduto(){
        return view('events.produto_registro');

    }

    public function produto(Request $request){
        
        $cad = new Produto;

        $cad->nome_produto = $request->nome_produto;
        $cad->local = $request->local;
        $cad->valor = $request->valor;
        $cad->qtd = $request->qtd;
        $cad->descricao = $request->descricao;

        $cad->save();

        return redirect('/registro');
    }
}
