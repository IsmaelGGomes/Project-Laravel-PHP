@extends('layouts.dash_principal')

@section('title', 'Market')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">

                    <div class="row p-5">
                        <div class="col-md-12">

                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    @foreach ($query as $indice => $busca)
                                    @if ($indice == 0)
                                    <li data-target="#myCarousel" data-slide-to=<?php echo $indice ?>class="active"></li>
                                    @else
                                    <li data-target="#myCarousel" data-slide-to=<?php echo $indice ?>></li>
                                    @endif
                                    @endforeach
                                </ol>

                                <!-- Wrapper for slides -->

                                
                                    @foreach ($query as $indice => $busca)

                                    @if ($indice == 0)
                                    <div class="carousel">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="thumb-wrapper">
                                                    <div class="img-box">
                                                        <img src="https://i.ibb.co/gFfmmch/pngwing-com.png" class="img-responsive img-fluid" alt="">
                                                    </div>
                                                    <div class="thumb-content">
                                                        <h4>{{ $busca->id}}</h4>
                                                        <p class="item-price"><b>Nome: </b><span>{{ $busca->nome_produto}}<br /></span></p>
                                                        <p class=""><b>Senha: </b>{{$busca-> local}}</p>
                                                        <p class=""><b>Setor: </b>{{$busca-> descricao}}</p>
                                                        <p class=""><b>valor: </b>{{$busca-> valor}}</p>
                                                        <p class=""><b>Quantidade: </b>{{$busca-> qtd}}</p>

                                                        <a href="#" class="btn btn-primary">Adicionar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="carousel-inner">
                                    <div class="item">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="thumb-wrapper">
                                                    <div class="img-box">
                                                        <img src="https://i.ibb.co/gFfmmch/pngwing-com.png" class="img-responsive img-fluid" alt="">
                                                    </div>
                                                    <div class="thumb-content">
                                                        <h4>{{ $busca->id}}</h4>
                                                        <p class="item-price"><b>Nome: </b><span>{{ $busca->nome_produto}}<br /></span></p>
                                                        <p class=""><b>Senha: </b>{{$busca-> local}}</p>
                                                        <p class=""><b>Setor: </b>{{$busca-> descricao}}</p>
                                                        <p class=""><b>valor: </b>{{$busca-> valor}}</p>
                                                        <p class=""><b>Quantidade: </b>{{$busca-> qtd}}</p>

                                                        <a href="#" class="btn btn-primary">Adicionar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endif
                                @endforeach
                            </div>


                            <!-- Left and right controls -->
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