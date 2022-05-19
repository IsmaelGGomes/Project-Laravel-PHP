<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Login;

class LoginController extends Controller
{
    
     public function registro(){
        return view('events.registro');

    }
    
    public function store1(Request $request){
        
        $event = new Login;

        $event->nome = $request->nome;
        $event->email = $request->email;
        $event->senha = $request->senha;
        $event->setor = $request->setor;

        $event->save();

        return redirect('/listaLogin');

    }

    public function login(){
        return view('paginas.login');

    }

    /* TELA DE REGISTROS DE USUARIOS*/
    public function listagem(){
        return view('paginas.usuarios');

    }

    public function lista(){

        $busca = request('busca');

        if ($busca){
            $loggers = Login::where([
                ['nome', 'like', '%'.$busca.'%']
            ])->get();

        }else{
            $loggers = Login::all();
        }

        return view('paginas.usuarios',['logins' => $loggers, 'busca' => $busca]);
    }
    
    /* TELA DE EDITAR USUARIOS*/

    public function edits(){
        return view('events.editar');
    }

    /* TELA DE REGISTROS DE USUARIOS FORA */
    public function registro1(){
        return view('paginas.registro_fora');

    }
    
    public function store2(Request $request){
        
        $event = new Login;

        $event->nome = $request->nome;
        $event->email = $request->email;
        $event->senha = $request->senha;
        $event->setor = $request->setor;

        $event->save();

        return redirect('/registro');

    }
    
}
