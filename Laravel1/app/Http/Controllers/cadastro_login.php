<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use  Laravel1\app\Models\cadastro;

class cadastro_login extends Controller

{
    public function index(){
	
        $cadastrar ="cadastro::all";
    
        return view ('login',['cadastro => $cadastrar']);
    }
}
