<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="tamples.css">
</head>

<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <body class="home">
        <div class="container-fluid display-table">

            <div class="row display-table-row">

                <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                    <div class="logo">
                        <!-- imagem no canto-->
                        <!-- <a hef="home.html"><img src="http://jskrishna.com/work/merkury/images/logo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                            <img src="http://jskrishna.com/work/merkury/images/circle-logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                        </a> -->
                    </div>
                    <div class="navi">
                        <ul>
                            <li><a href="/login_registro/Dash/index.php?x=asdas"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                            <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Workflow</span></a></li>
                            <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Statistics</span></a></li>
                            <li><a href="/login_registro/rolagem2.php?x=dashboard"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Carrosel Registro</span></a></li>
                            <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Usuários</span></a></li>
                            <li><a href="#"><i class="fa fa-cog" aria-hidden="true" type="submit"></i><span class="hidden-xs hidden-sm">Area ADM</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true" type="submit"></i><span class="hidden-xs hidden-sm">Area de Compras</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-10 col-sm-11 display-table-cell v-align">
                    <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                    <div class="row">

                        <header>
                            <div class="col-md-7">
                                <nav class="navbar-default pull-left">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                </nav>
                                <div class="search hidden-xs hidden-sm">
                                    <input type="text" placeholder="Search" id="search">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="header-rightside">
                                    <ul class="list-inline header-top pull-right">
                                        <li class="hidden-xs"><a href="/login_registro/Dash/registro_usuario_index.php" class="add-project" data-toggle="modal" data-target="#add_project">Cadastrar</a></li>
                                        <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                                        <li>
                                            <a href="#" class="icon-info">
                                                <i class="fa fa-bell" aria-hidden="true"></i>
                                                <span class="label label-primary"></span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </header>
                    </div>
                    <div class="user-dashboard">

                        <h1>Olá, <?php echo $_SESSION['nome'] ?></h1>
                        <div class="row">

                            <div class="col-md-8 col-sm-8 col-xs-12 gutter">

                                <!-- <div class="sales">
                                    <h2>Tabela de Usuários</h2>
                                </div> -->
                                <div class="panel-heading" class="btn-group">
                                    <div class="row">
                                        <div class="col col-xs-6">

                                            <p>
                                            <form action="" method="GET">

                                                <input type="text" name="name" placeholder=" Insira o ID" size="54">
                                                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                                            </form>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="panel-body">
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
                                                include("Conexao.php");
                                                //AREA PARA FILTRAR
                                                $id_pesquisa = $pesquisar = filter_input(INPUT_GET, 'id');

                                                $id_pesquisa_name = $pesquisar = filter_input(INPUT_GET, 'name');


                                                $resultado_pesquisa = "SELECT * FROM acesso_novo WHERE id=$pesquisar";
                                                $resultado_query = mysqli_query($mysqli, $resultado_pesquisa);
                                                ?>

                                                <?php
                                                if ($resultado_query->num_rows == 1) {

                                                    while ($proc1 = mysqli_fetch_assoc($resultado_query)) {
                                                ?>
                                            </tr>

                                            <tr>

                                                <td align="center">

                                                    <a class="btn btn-default" href="/login_registro/Dash/editar_usuario_index.php"><em class="fa fa-pencil"></em></a>

                                                    <a class="btn btn-danger" href="/login_registro/Dash/usuarios_index.php?acao=deletar&id=<?php echo $proc1['id'] ?>"><em class="fa fa-trash"></em></a>

                                                </td>
                                                <?php $_SESSION['id_select'] = $proc1['id'] ?>

                                                <td><?php echo $proc1['id'] . "<br/>"; ?></td>
                                                <td><?php echo $proc1['nome'] . "<br/>"; ?></td>
                                                <td><?php echo $proc1['email'] . "<br/>"; ?></td>
                                                <td><?php echo $proc1['senha'] . "<br/>"; ?></td>
                                                <td><?php echo $proc1['setor'] . "<br/>"; ?></td>
                                                                
                                            </tr>
                                        <?php
                                                    }
                                                } else { ?>
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
                                            <?php

                                            $resultado_pesquisa1 = "SELECT * FROM acesso_novo";

                                            $resultado_query1 = mysqli_query($mysqli, $resultado_pesquisa1);

                                            while ($proc1 = mysqli_fetch_assoc($resultado_query1)) {
                                            ?>
                                                <tr>
                                                    <!--  <td align="center"> </td> -->
                                                <tr></tr>
                                                <td><?php echo $proc1['id'] . "<br/>"; ?></td>
                                                <td><?php echo $proc1['nome'] . "<br/>"; ?></td>
                                                <td><?php echo $proc1['email'] . "<br/>"; ?></td>
                                                <td><?php echo $proc1['senha'] . "<br/>"; ?></td>
                                                <td><?php echo $proc1['setor'] . "<br/>"; ?></td>

                                                </tr>
                                            <?php }
                                            //DELETAR REGISTROS SALVOS
                                            include('conexao.php');

                                            if (isset($_GET['acao'])) {

                                                if ($_GET['acao'] == "deletar") {
                                                    $id = $_GET['id'];

                                                    $sql_delete = "DELETE FROM acesso_novo WHERE id= $id";

                                                    if ($mysqli->query($sql_delete) === TRUE) {
                                                        echo "";
                                                    } else {
                                                        echo "Erro ao deletar !" . $mysqli->error;
                                                    }
                                                }
                                            }

                                            ?>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>



        <!-- Modal -->
        <div id="add_project" class="modal fade" role="dialog">

            <div class="modal-dialog">


                <!-- Modal content-->
                <div class="modal-content">

                    <div class="modal-header login-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h4 class="modal-title">Add Project</h4>
                    </div>
                    <div class="modal-body">
                        <input type="text" placeholder="Project Title" name="name">
                        <input type="text" placeholder="Post of Post" name="mail">
                        <input type="text" placeholder="Author" name="passsword">
                        <textarea placeholder="Desicrption"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="cancel" data-dismiss="modal">Close</button>
                        <button type="button" class="add-project" data-dismiss="modal">Save</button>
                    </div>
                </div>

            </div>
        </div>

    </body>

</body>
</body>

</html>