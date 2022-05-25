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

        $event->nome = $request->nome;
        $event->email = $request->email;
        $event->setor = $request->setor;
        $event->estado = $request->estado;
        $event->descricao = $request->descricao;
        

        $event->save();

        return redirect('/contato_index')->with('msg', 'Formulário enviado !');
    }

    public function proc(){

        $estados = array(

            35 => array(
                'sigla' => 'SP',
                'nome' => 'São Paulo',
            ),
            41 => array(
                'sigla' => 'PR',
                'nome' => 'Paraná',
            ),
            42 => array(
                'sigla' => 'SC',
                'nome' => 'Santa Catarina',
            ),
            43 => array(
                'sigla' => 'RS',
                'nome' => 'Rio Grande do Sul',
            ),
            50 => array(
                'sigla' => 'MS',
                'nome' => 'Mato Grosso do Sul',
            ),
            11 => array(
                'sigla' => 'RO',
                'nome' => 'Rondônia',
            ),
            12 => array(
                'sigla' => 'AC',
                'nome' => 'Acre',
            ),
            13 => array(
                'sigla' => 'AM',
                'nome' => 'Amazonas',
            ),
            14 => array(
                'sigla' => 'RR',
                'nome' => 'Roraima',
            ),
            15 => array(
                'sigla' => 'PA',
                'nome' => 'Pará',
            ),
            16 => array(
                'sigla' => 'AP',
                'nome' => 'Amapá',
            ),
            17 => array(
                'sigla' => 'TO',
                'nome' => 'Tocantins',
            ),
            21 => array(
                'sigla' => 'MA',
                'nome' => 'Maranhão',
            ),
            24 => array(
                'sigla' => 'RN',
                'nome' => 'Rio Grande do Norte',
            ),
            25 => array(
                'sigla' => 'PB',
                'nome' => 'Paraíba',
            ),
            26 => array(
                'sigla' => 'PE',
                'nome' => 'Pernambuco',
            ),
            27 => array(
                'sigla' => 'AL',
                'nome' => 'Alagoas',
            ),
            28 => array(
                'sigla' => 'SE',
                'nome' => 'Sergipe',
            ),
            29 => array(
                'sigla' => 'BA',
                'nome' => 'Bahia',
            ),
            31 => array(
                'sigla' => 'MG',
                'nome' => 'Minas Gerais',
            ),
            33 => array(
                'sigla' => 'RJ',
                'nome' => 'Rio de Janeiro',
            ),
            51 => array(
                'sigla' => 'MT',
                'nome' => 'Mato Grosso',
            ),
            52 => array(
                'sigla' => 'GO',
                'nome' => 'Goiás',
            ),
            53 => array(
                'sigla' => 'DF',
                'nome' => 'Distrito Federal',
            ),
            22 => array(
                'sigla' => 'PI',
                'nome' => 'Piauí',
            ),
            23 => array(
                'sigla' => 'CE',
                'nome' => 'Ceará',
            ), 
            32 => array(
                'sigla' => 'ES',
                'nome' => 'Espírito Santo',
            ),
        );

        return view('paginas.contato',['estados' => $estados]);

    }
}