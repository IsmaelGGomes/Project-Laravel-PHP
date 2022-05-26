<div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>
                    <!-- Wrapper for carousel items -->
                   @foreach ( $query as $busca)
                        <div class="carousel-inner">
                            <div class="item carousel-item active">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="https://i.ibb.co/gFfmmch/pngwing-com.png" class="img-responsive img-fluid" alt="">
                                            </div>
                                            <div class="thumb-content">
                                                <h4>{{ $busca->id}}</h4>
                                                <p class="item-price"><b>Nome: </b><span>{{ $busca->nome_produto}}<br/></span></p>
                                                
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
                        @endforeach

                    <?php /* while ($proc1 = mysqli_fetch_assoc($resultado_query1)) { ?>


                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="https://i.ibb.co/gFfmmch/pngwing-com.png" class="img-responsive img-fluid" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4><?php echo $proc1['id'] ?></h4>
                                        <p class="item-price"><b>Nome: </b><span><?php echo $proc1['nome'] . "<br/>"; ?></span></p>
                                        <p><b>Email: </b><?php echo $proc1['email'] ?></p>
                                        <p class=""><b>Senha: </b><?php echo $proc1['senha'] ?></p>
                                        <p class=""><b>Setor: </b><?php echo $proc1['setor'] ?></p>

                                        <a href="#" class="btn btn-primary">Adicionar</a>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } */ ?>

                    <!-- Carousel controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>

                </div>

            </div>
        </div>
    </div>