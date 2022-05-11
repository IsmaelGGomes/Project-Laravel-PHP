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
                            <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                            <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Fluxo de Trabalho</span></a></li>
                            <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Estatistica</span></a></li>
                            <li><a href="/login_registro/rolagem2.php?x=dashboard"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Lista Registros</span></a></li>
                            <li><a href="/login_registro/Dash/usuarios_index.php?x=user"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Usuários</span></a></li>
                            <li><a href="#"><i class="fa fa-cog" aria-hidden="true" type="submit"></i><span class="hidden-xs hidden-sm">Area ADM</span></a></li>                            
                            <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true" type="submit"></i><span class="hidden-xs hidden-sm">Area de Compras</span></a></li>
                            <li><a href="/login_registro/Dash/contato.php"><i class="fa fa-sort" aria-hidden="true" type="submit"></i><span class="hidden-xs hidden-sm">Contate-nos</span></a></li>

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
                                        <li class="hidden-xs"><a href="/login_registro/Dash/registro_usuario_index.php" class="add-project">Cadastrar</a></li>
                                        <li>
                                            <a href="#" class="icon-info">
                                                <i class="fa fa-bell" aria-hidden="true"></i>
                                                <span class="label label-primary"></span>
                                            </a>
                                        </li>
                                        <!-- BOTAO DE LOG OUT -->
                                        <li><a href="/login_registro/login.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                        </header>
                    </div>
                    <div class="user-dashboard">

                        <h1>Olá, <?php echo $_SESSION['nome'] ?></h1>
                        <div class="row">

                            <!-- AREA PARA INSERIR ALGO DO LADO DE REPORT-->
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12 gutter">

                            <div class="sales report">
                                <h2>Report</h2>
                                <div class="btn-group">
                                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span>Period:</span> Last Year
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="#">2012</a>
                                        <a href="#">2014</a>
                                        <a href="#">2015</a>
                                        <a href="#">2016</a>
                                    </div>
                                </div>
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