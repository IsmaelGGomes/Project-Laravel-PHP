@extends('layouts.dash_principal')

@section('title','Registro')

@section('content')

<div class="container">


    <div>

        <style type="text/css">
            input {
                float: center;
                width: 20%;
            }

            body {
                height: 10px;
                font-size: 11pt;
                margin: 0px auto;
            }

            #editar_input {
                width: 22%;
            }
        </style>

        <form action="/evento" method="POST">

            @csrf
            <div class="form-group">
                <br>
                <br>
                <br>
                <br>
                <div class="form-group">

                    <label for="" class="cols-sm-2 control-label" name="nome">Nome</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"> <i class="fa fa-user fa" aria-hidden="true"> </i> </span>
                            <input type="text" name="nome" placeholder="Insira seu nome" />
                        </div>
                    </div>
                </div>

                <label for="" classe="cols-sm-2 control-label" name="registro_email"> Email</label>
                <div class="cols-sm10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input type="email" name="email" placeholder="Insira seu email" />
                    </div>
                </div>

                <br>
                <label for="" class="cols-sm-2 control-label"> Senha</label>
                <div class="cols-sm10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
                        <input type="password" name="senha" placeholder="Insira sua senha" />
                    </div>
                </div>

                <br>
                <div class="form-group">
                    <label><b>Setor</b></label>
                    <select class="form-control" id="editar_input" name="setor">
                        <option>Biblioteca</option>
                        <option>Estacionamento</option>
                        <option>TI</option>
                        <option>Master</option>
                    </select>
                </div>
                <br>
                <br>
                <a href="/listaLogin"><input type="submit" class="btn btn-primary" value="Cadastrar"></a>
                <br>
        </form>
        <br>
        <!-- <a href=""><button type="button" class="btn btn-info">Voltar</button></a> -->
        <!-- <a href="painel2.php?i=back"> <br> <button> Voltar </button> </a> -->
    </div>
</div>

@endsection