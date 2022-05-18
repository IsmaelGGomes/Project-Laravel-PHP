<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Local;

class LocalController extends Controller
{
    public function registro3(){
        return view('paginas.contato');

    }
    
    public function store3(Request $request){
        
        $event = new Local;

        $event->nome1 = $request->nome1;
        $event->email1 = $request->email1;
        $event->setor1 = $request->setor1;
        $event->estado12 = $request->estado12;

        $event->save();

        return redirect('/listaLogin');
    }
}
