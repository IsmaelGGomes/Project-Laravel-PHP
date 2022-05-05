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
                            <li><a href="/login_registro/rolagem2.php?x=dashboard"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Lista Registros</span></a></li>
                            <li><a href="/login_registro/Dash/usuarios_index.php?x=user"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Usuários</span></a></li>
                            <li><a href="#"><i class="fa fa-cog" aria-hidden="true" type="submit"></i><span class="hidden-xs hidden-sm">Area ADM</span></a></li>
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
                                        <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Registrar</a></li>
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
                    <?php
                    if ($_POST) {

                        include("conexao.php");
                    
                        if (isset($_POST['email']) || isset($_POST['senha'])) {
                    
                            if (strlen($_POST['email']) == 0) {
                                echo "<h4> Preencha seu e-mail </h4>";
                            } else 
                                if (strlen($_POST['senha']) == 0) {
                                echo "<h4> Preencha sua senha </h4>";
                            } else 
                                if (strlen($_POST['nome']) == 0) {
                                echo "<h4> Preencha seu nome </h4>";
                            } else
                            if (strlen($_POST['setor']) == 0) {
                                echo "<h4> insira o setor </h4>";
                            }
                        }
                    
                        //$pagina = ($_GET['x']);
                        $nome1 = ($_POST['nome']);
                        $email1 = ($_POST['email']);
                        $senha1 = ($_POST['senha']);
                        $setor1 = ($_POST['setor']);
                        //$cadastro = ($_GET['cadastro']);
                        if (!empty($_POST['email']) and (!empty($_POST['nome'])) and (!empty($_POST['senha'])) and (!empty($_POST['setor']))) {
                    
                            $sql = "INSERT INTO acesso_novo(nome, email, senha, setor) 
                                VALUES ('$nome1', '$email1', '$senha1', '$setor1')";
                    
                            if (mysqli_query($mysqli, $sql)) {
                                echo "<h4> Usuario cadastrado com sucesso !</h4>";
                            } else {
                                echo "Erro !" . mysqli_connect_error($mysqli);
                            }
                            mysqli_close($mysqli);
                        }
                    }

                    ?>
                    <div class="user-dashboard">

                        <div class="row">

                            <div class="col-md-5 col-sm-5 col-xs-12 gutter">

                                <div class="sales">
                                    <h2>Cadastro de Usuário</h2>
                                </div>

                            </div>
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
                                <form atcion="" method="POST">
                                    <div class="form-group">
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                           
                                            <label for="" class="cols-sm-2 control-label">Nome</label>
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
                                        <button class="col-md-1,5 btn btn-success">Cadastrar</button>
                                        <br>
                                </form>
                                <br>
                                <a href="/login_registro/Dash/usuarios_index.php"><button type="button" class="btn btn-info">Voltar</button></a>
                                <!-- <a href="painel2.php?i=back"> <br> <button> Voltar </button> </a> -->

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