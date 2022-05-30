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

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()){

            $requestImage = $request->imagem;

            $extension = $requestImage->extension();
            
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            
            $requestImage->move(public_path('img/produtos'), $imageName);

            $cad->imagem = $imageName;
        }


        $cad->save();

        return redirect('/events/cadastroProdutos');
    }

    /* EVENTO DE MOSTRAR OS REGISTROS NA IMPRESSAO */

    public function imp(){

        $events = Produto::all();

        foreach ($events as $imp){
            $imp->qtd;
            $imp->valor;

            $subtotal= ($imp-> qtd  * $imp-> valor);
        
           @$somartotal= $somartotal + $subtotal;
        }

        return view('events.imprimir',['impressao' => $events, 'total'=> $somartotal, 'subtotal'=>$subtotal]);
    }

    public function mostrar_imp(){
        return view('events.imprimir');
    }

    /* TELA DO MARKEPLACE */

    public function show(){

        return redirect('paginas.market');
    }
    public function query(){

        //$pg= ($show == '' ? 1 : $show);
        
        $events = Produto::all();

        return view ('paginas.market', ['query'=> $events]);
    }
}
