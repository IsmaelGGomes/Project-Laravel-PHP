@extends('layouts.dash_principal')

@section('title')

@section('content')

<div class="row">

    <div class="col-md-6 col-sm-8 col-xs-12 gutter">


        <div class="panel-heading" class="btn-group">
            <div class="row">
                <div class="col col-xs-6">
                    <p>
                    <form action="" method="get">

                        <input type="text" name="name" placeholder=" Insira o ID" size="54">
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                    </form>
                    </p>
                </div>

            </div>
        </div>
        <div class="painel-body">
            <table class="table table-striped table-bordered table-list">
                <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Setor</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php

                        //AREA PARA FILTRAR

                        ?>


                    </tr>

                    <tr>

                        <td align="center">

                            <a class="btn btn-default" href="/login_registro/Dash/editar_usuario_index.php"><em class="fa fa-pencil"></em></a>

                            <a class="btn btn-danger" href="/login_registro/Dash/usuarios_index.php?acao=deletar&id=<?php ?>"><em class="fa fa-trash"></em></a>

                        </td>
                        <?php //recebendo o ID para uma SESSION
                        ?>

                        <td><?php "<br/>"; ?></td>
                        <td><?php "<br/>"; ?></td>
                        <td><?php "<br/>"; ?></td>
                        <td><?php "<br/>"; ?></td>
                        <td><?php "<br/>"; ?></td>

                    </tr>
                    <?php { ?>
                        <div class="alert alert-danger" role="alert">
                            ID NÃO ENCONTRADO
                        </div>
                    <?php } ?>

                    <div class="panel-body">
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

                            
                                <!--  <td align="center"> </td> -->

                                @foreach($logins as $event)
                                <tr>
                                <td>{{ $event->id }}<br ></td>
                                <td>{{ $event->nome }}<br ></td>
                                <td>{{ $event->email }}<br ></td>
                                <td>{{ $event->senha }}<br ></td>
                                <td>{{ $event->setor }}<br></td>
                                </tr>
                                @endforeach
                            
                            <?php
                            //DELETAR REGISTROS SALVOS

                            ?>
                            </tr>

                </tbody>
            </table>

        </div>
    </div>

</div>

@endsection