<?php

use Symfony\Component\VarDumper\VarDumper;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="css/style2.css">

</head>

<body>
    <center>
        <div class="sidenav">
            <div class="login-main-text">
                <h2>Login<br></h2>
            </div>
        </div>
    </center>

    <style type="text/css">
        .form-group {
            position: relative;
            margin: 10px;
        }

        label {
            float: left;
        }

        input {
            /*   line-height: 30px;
            margin: 0px auto; */
            
        }
    </style>

    <center>
        <div class="main" id="left">
            <link rel="stylesheet" href="css/LOGIN2.css">
            <div class="col-md-6 col-sm-12">
                <div class="login-form">
                    <form action="/login" method="POST">
                        @csrf
                        <div class="form-group">
                            <label><b>E-mail</b></label>
                            <input type="text" class="form-control" placeholder="Insira o e-mail" name="email">
                        </div>
                        <div class="form-group">
                            <label><b>Senha</b></label>
                            <input type="password" class="form-control" placeholder="Insira a senha" name="senha">
                        </div>
                        <div class="form-group">
                            <label><b>Setor</b></label>
                            <select class="form-control" id="select1" name="setor">
                                <option>Biblioteca</option>
                                <option>Estacionamento</option>
                                <option>TI</option>
                                <option>Master</option>
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-black">Entrar</button>

                    </form>
                    <a href="registro_usuario"><br><button type="submit" class="btn btn-secondary">Registrar</button> </a>
                </div>
            </div>
        </div>
    </center>

</body>

</html>