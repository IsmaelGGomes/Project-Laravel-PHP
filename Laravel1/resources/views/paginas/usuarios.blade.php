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
                        <div class="painel-heading" class="btn-group">
                            <div class="row">
                                <div class="col col-xs-6">
                                    <p>
                                        <form action="/listaLogin" method="get">
                                            <input id="cat" class="search-query" type="text" name="busca" placeholder=" Insira o Nome" size="54">
                                            <a href="{{--route('editar', ['id' => $logins->id])--}}"><button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button></a>
                                        </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </tr>
                    @if ($busca)
                    
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Senha</th>
                        <th>Setor</th>
                        <th id="sel">Imagem</th>
                    </tr>
                    @foreach($logins as $event)
                        <tr>
                            <td align="center">

                                <a class="btn btn-default" href="/editar-cadastro/{{ $event->id }}"><em class="fa fa-pencil"></em></a>
                                <form action="/listaLogin/{{ $event->id }}" method="POST" id="danger">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" id="dangers"> <em class="fa fa-trash"></em>
                                </form>
                            </td>
                            <td>{{ $event->id }}<br></td>
                            <td>{{ $event->nome }}<br></td>
                            <td>{{ $event->email }}<br></td>
                            <td>{{ $event->senha }}<br></td>
                            <td>{{ $event->setor }}<br></td>
                            <td id="sel"><img src="img/events/{{ $event->imagem }}"></td>
                        </tr>

                    @endforeach

                    @elseif (!$busca)
                            <div class="alert alert-danger" role="alert">
                                ID NÃO ENCONTRADO
                            </div>
                    @endif

                    
                </tbody>

                <?php if (!$cont) { ?>
                    <div class="painel-body">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                                <tr>
                                    <th class="hidden-xs">ID</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Senha</th>
                                    <th>Setor</th>
                                    <th>imagem</th>
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
                                    
                                    <div id="imagemselect">
                                    <td><img src="img/events/{{ $novo->imagem }}"></td>
                                    </div>
                                </tr>
                                @endforeach

                                <?php
                                //DELETAR REGISTROS SALVOS
                               
                                ?>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                <?php } ?>
            </table>
        </div>

    </div>
</div>

@endsection