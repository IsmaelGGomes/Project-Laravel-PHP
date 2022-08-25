<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Login;

use Illuminate\Support\Facades\Auth;


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

        //imagem uploud
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()){

            $requestImage = $request->imagem;

            $extension = $requestImage->extension();
            
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            
            $requestImage->move(public_path('img/events'), $imageName);

            $event->imagem = $imageName;
        }

        $event->save();

        return redirect('/listaLogin')->with('msg', 'Evento criado com sucesso!');

    }  

    /* TELA DE LOGIN */

    public function login(Request $request){
        

        if (Auth::attempt(['email' => $request->email, 'senha' => $request->password,'setor' => $request->setor ])) {
          
            dd('esta logado');
        }else{
            dd('não esta logado'); 
        }

        return view('paginas.login');

    }

    public function show(){
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
            $cont=1;
        }else{
            $loggers = Login::all();
            $cont=0;
        }
        
        return view('paginas.usuarios',['logins' => $loggers, 'busca' => $busca, 'cont'=>$cont]);
    }
    
    /* TELA DE EDITAR USUARIOS*/

    public function edits($id){

        $quest = Login::find($id);

        return view('events.editar', ['file' => $quest]);
    }

    public function edit(Request $request, $id) {
        
        $quest = Login::find($id);
        $quest ->update([
            
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => $request->senha,
            'setor' => $request->setor,
        ]);

        return redirect('listaLogin')->with('msg','Cadastro Editado !');
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

        return redirect('/login');

    }

    /* EVENTO DE DELETAR O CADASTRO */
    
    /* recebendo o id da rota */
    public function destroy($id){

        Login::findOrfail($id)->delete();

        return redirect('/listaLogin')->with('msg', 'Usuário excluído com sucesso !');

    }
}   
