@extends('layouts.dash_principal')

@section('title', 'Market')

@section('content')

<style type="text/css">
    .carousel .carousel-control.left i {
        margin-left: -3px;
    }

    .carousel .carousel-control.left i {
        margin-right: -3px;
    }

    .carousel .carousel-indicators {
        bottom: -50px;
    }

    .carousel .carousel-control {
        height: 100px;
        width: 40px;
        background: none;
        margin: auto 0;
        background: rgba(0, 0, 0, 0.2);
    }

    .row[name="primeiro"],
    .row[name="segundo"] {
        padding-left: 10px;

    }

    #shop {

        width: 1%;
        float: right;

    }

    #selectid {
        width: 200px;

    }
</style>

<div class="container">
    <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
            <div class="card">

                <div id="shop">
                    <a href="/finalizar-compra"><i class="fa fa-shopping-cart fa-4x" aria-hidden="true"></i></a>
                </div>

                <div class="card-body p-0">
                    <div class="row p-5">
                        <div class="">
                            <p><a href="/events/cadastroProdutos">ADICIONAR PRODUTO</a></p>
                        </div>

                        <br>
                        <div class="col-md-12">
                            <div class="div-container-fluid">

                                <!-- Indicators -->
                                <ol class="carousel-indicators">

                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>

                                </ol>

                                <!-- Wrapper for slides -->

                                <div class="carousel-inner">

                                    @foreach ($query as $busca)

                                    <div class="item">
                                        <div class="row" id="primeiro">
                                            <div class="col-sm-2">
                                                <div class="thumb-wrapper">
                                                    <div class="img-box">
                                                        <img src="https://i.ibb.co/gFfmmch/pngwing-com.png" class="img-responsive img-fluid" alt="">
                                                    </div>
                                                    <form action="/finalizar-compra" method="POST">
                                                        @csrf
                                                        <div class="thumb-content">
                                                            <center>
                                                                <h4>{{$busca->id}}</h4>
                                                            </center>
                                                            <p class="item-price" name="nome_produto"><b>Nome:</b><span>{{$busca->nome_produto}}<br /></span></p>
                                                            <p class="" name="local"><b>Senha: </b>{{$busca-> local}}</p>
                                                            <p class="" name="descricao"><b>Setor: </b>{{$busca-> descricao}}</p>
                                                            <p class="" name="valor"><b>valor: </b>{{$busca-> valor}}</p>

                                                            <b>Quantidade</b><span><input class="form-control" name="quantidade"></span>

                                                            <a href="#" class="btn btn-primary" type="submit">Adicionar</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                </div>

                                <div class="carousel-inner">
                                    @foreach ($query as $busca)

                                    <div class="item">
                                        <div class="row" id="segundo">

                                            <div class="col-sm-2">
                                                <div class="thumb-wrapper">
                                                    <div class="img-box">
                                                        <img src="https://i.ibb.co/gFfmmch/pngwing-com.png" class="img-responsive img-fluid" alt="">
                                                    </div>
                                                    <div class="thumb-content">
                                                        <center>
                                                            <h4>{{ $busca->id}}</h4>
                                                        </center>
                                                        <p class="item-price"><b>Nome: </b><span>{{$busca->nome_produto}}<br /></span></p>
                                                        <p class=""><b>Senha: </b>{{$busca-> local}}</p>
                                                        <p class=""><b>Setor: </b>{{$busca-> descricao}}</p>
                                                        <p class=""><b>valor: </b>{{$busca-> valor}}</p>

                                                        <b>Quantidade</b><span><input class="form-control" name="selectid"></span>
                                                        <a href="#" class="btn btn-primary">Adicionar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endforeach
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection