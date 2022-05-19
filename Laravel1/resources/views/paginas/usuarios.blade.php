@extends('layouts.dash_principal')

@section('title','Usuários')

@section('content')

<div class="row">

    <div class="col-md-6 col-sm-8 col-xs-12 gutter">

        <div class="painel-body">
            <table class="table table-striped table-bordered table-list">
                <thead>
                    
                </thead>
                <tbody>
                    <tr>
                        <div class="panel-heading" class="btn-group">
                            <div class="row">
                                <div class="col col-xs-6">
                                    <p>
                                    <form action="/listaLogin" method="get">
                                        <input type="text" name="busca" placeholder=" Insira o Nome" size="54">
                                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                                    </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </tr>

                    <?php $cont = 0; ?>
                    @if ($busca)
                    <h4>BUSCANDO POR: {{ $busca }}</h4>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Setor</th>
                    </tr>
                    @foreach($logins as $event)
                    <tr>
                        <td align="center">

                            <a class="btn btn-default" href="/login_registro/Dash/editar_usuario_index.php"><em class="fa fa-pencil"></em></a>

                            <a class="btn btn-danger" href="/login_registro/Dash/usuarios_index.php?acao=deletar&id=<?php ?>"><em class="fa fa-trash"></em></a>

                        </td>
                        <td>{{ $event->id }}<br></td>
                        <td>{{ $event->nome }}<br></td>
                        <td>{{ $event->email }}<br></td>
                        <td>{{ $event->senha }}<br></td>
                        <td>{{ $event->setor }}<br></td>
                    </tr>

                    @endforeach

                    @else
                        @if ($busca ==0)
                        <div class="alert alert-danger" role="alert">
                            ID NÃO ENCONTRADO
                        </div>
                        @endif

                    @endif
                </tbody>

                <?php if (!$cont){?>
                    <div class="painel-body">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                                <tr>
                                    <th class="hidden-xs">ID</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Senha</th>
                                    <th>Setor</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($logins as $novo)
                                <tr>
                                    <td>{{ $novo->id }}<br></td>
                                    <td>{{ $novo->nome }}<br></td>
                                    <td>{{ $novo->email }}<br></td>
                                    <td>{{ $novo->senha }}<br></td>
                                    <td>{{ $novo->setor }}<br></td>
                                </tr>
                                @endforeach

                                <?php
                                //DELETAR REGISTROS SALVOS

                                ?>
                                </tr>
                            </tbody> 
                        </table>

                    </div>
                <?php }?>
            </table>
        </div>

    </div>
</div>

@endsection