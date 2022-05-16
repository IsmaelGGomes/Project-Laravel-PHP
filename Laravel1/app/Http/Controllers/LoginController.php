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
        //criar um objeto criadno uma variavel
        //Distanciar a classe do model 
        $event = new Login;

        $event->nome = $request->nome;
        $event->email = $request->email;
        $event->senha = $request->senha;
        $event->setor = $request->setor;

        $event->save();

        return redirect('/registro');

    }

    public function login(){
        return view('paginas.login');

    }

    /* TELA DE REGISTROS DE USUARIOS*/
    public function listagem(){
        return view('paginas.usuarios');

    }

    public function lista(){

        $loggers = Login::all();

        return view('paginas.usuarios',['logins' => $loggers]);
    }
    
    /* TELA DE EDITAR USUARIOS*/

    public function edits(){
        return view('events.editar');

    }

}
