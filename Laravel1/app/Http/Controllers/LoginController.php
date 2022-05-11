<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Logins;

class LoginController extends Controller
{
    public function login(){

        $dados = Logins::all();

        return view('baseLogin',['login' => $dados]);
    }
    /* public function create(){
        return view('events.creat');

    } */
}
