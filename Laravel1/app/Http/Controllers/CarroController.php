<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Carro;

class CarroController extends Controller
{
    public function show(){
        return view('events.carro');
    }

    public function store(Request $request){

        $event = new Carro();

        $event-> nome_produto= $request->nome_produto;
        $event-> local= $request->local;
        $event-> descricao= $request->descricao;
        $event-> valor=$request->valor;
        $event-> quantidade= $request->quantidade;

        $event->save();

    
        return redirect('/events/carro');
    }
}
