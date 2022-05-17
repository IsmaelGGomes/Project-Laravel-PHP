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
        
        $cad = new produto;

        $cad->nome = $request->nome;
        $cad->email = $request->email;
        $cad->estado = $request->estado;
        $cad->setor = $request->setor;
        $cad->descricao = $request->descricao;

        $cad->save();

         return redirect('/produto_registro');

    }
}
