@extends('layouts.dash_principal')

@section('title','Editar')

@section('content')

<div class="container-fluid" id="trazer">

    <div class="user-dashboard">
        <div class="row">

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
                        width: 10%;
                    }

                    #trazer{                        
                        width:65%;
                    }
                </style>
                <h1><!-- Editando:  --></h1>
                <form atcion="/events/editar" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">

                        <br>
                        <label for="" class="cols-sm-2 control-label">Nome</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"> <i class="fa fa-user fa" aria-hidden="true"> </i> </span>
                                <input type="text" name="nome" placeholder="Insira seu nome" />
                            </div>
                        </div>
                    </div>

                    <label for="" classe="cols-sm-2 control-label"> Email</label>
                    <div class="cols-sm10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" name="email" placeholder="Insira seu email" />
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
                    <button class="col-md-1,5 btn btn-success"> Editar Cadastro </button>
                    <br>
                </form>
                <br>
                <a href="/login_registro/Dash/usuarios_index.php"><button type="button" class="btn btn-info">Voltar</button></a>
                <!-- <a href="painel2.php?i=back"> <br> <button> Voltar </button> </a> -->
            </div>

        </div>
    </div>
</div>

@endsection