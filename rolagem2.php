<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuarios</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/rolagem1.css">

</head>

<body>

    <?php
    include('conexao.php');
    $resultado_pesquisa1 = "SELECT * FROM acesso_novo ORDER by id ASC";
    $resultado_query1 = mysqli_query($mysqli, $resultado_pesquisa1);
    ?>
    <form action="" method="GET">
        <div class="form-group">
            <center><label id="select21"><b>Setor</b></label></center>
            <select class="form-control" id="select2" name="setor">
                <option>Biblioteca</option>
                <option>Estacionamento</option>
                <option>TI</option>
                <option>Master</option>

            </select>
            <button>selecionar</button>
        </div>
    </form>

    <div>
        <center><a href="painel2.php"><button name=button3> NOVO</button></a></center>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Lista <b>Usuarios</b></h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">

                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <?php
                    //pesquisa por setores 

                    $id_pesquisa = $pesquisar = filter_input(INPUT_GET, 'setor');

                    //$id_pesquisa_name = $pesquisar = filter_input(INPUT_GET, 'name');

                    // Selecionar na tabela 
                    $resultado_pesquisa = "SELECT * FROM acesso_novo WHERE setor";
                    $resultado_query = mysqli_query($mysqli, $resultado_pesquisa);
                    ?>

                    <div class="carousel-inner">
                        <div class="row">
                            <div class="item carousel-item active">
                                <?php
                                if ($resultado_query->num_rows == 1) {

                                    while ($proc2 = mysqli_fetch_assoc($resultado_query)) { ?>
                                        <div class="col-sm-3">
                                            <div class="thumb-wrapper">
                                                <div class="img-box">
                                                    <img src="https://i.ibb.co/gFfmmch/pngwing-com.png" class="img-responsive img-fluid" alt="">
                                                </div>
                                                <div class="thumb-content">
                                                    <h4><?php echo $proc2['id'] ?></h4>
                                                    <p class="item-price"><b>Nome: </b><span><?php echo $proc2['nome'] . "<br/>"; ?></span></p>
                                                    <p><b>Email: </b><?php echo $proc2['email'] ?></p>
                                                    <p class=""><b>Senha: </b><?php echo $proc2['senha'] ?></p>

                                                    <a href="#" class="btn btn-primary">Adicionar</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                } else { ?>

                                    <?php while ($proc1 = mysqli_fetch_assoc($resultado_query1)) { ?>


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

                                                    <a href="#" class="btn btn-primary">Adicionar</a>
                                                </div>
                                            </div>
                                        </div>
                                <?php }
                                } ?>

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
</body>

</html>