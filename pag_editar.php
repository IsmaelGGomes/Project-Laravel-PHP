<?php
session_start();
if ($_POST) {

    include("conexao.php");


    if (isset($_POST['email']) || isset($_POST['senha']) || isset($_POST['nome']) || isset($_POST['setor'])) {

        if (strlen($_POST['email']) == 0) {
            echo "<h4> Preencha seu e-mail </h4>";
        } else 
            if (strlen($_POST['senha']) == 0) {
            echo "<h4> Preencha sua senha </h4>";
        } else 
            if (strlen($_POST['nome']) == 0) {
            echo "<h4> Preencha seu nome </h4>";
        } else
            if (strlen($_POST['setor']) == 0){
            echo ("<h4> Insira seu setor </h4>");
            }
    }

    //$voltar_pagina = ($_GET['x']);
    $nome1 = ($_POST['nome']);
    $email1 = ($_POST['email']);
    $senha1 = ($_POST['senha']);
    $setor1 = ($_POST['setor']);
    //$cadastro = ($_GET['cadastro']);
    if (!empty($_POST['email']) and (!empty($_POST['nome'])) and (!empty($_POST['senha'])) and (!empty($_POST['setor']))) {


        $sql = "UPDATE `acesso_novo` SET nome = '$nome1' , email = '$email1', senha= '$senha1', setor= '$setor1' WHERE `id` =" . $_SESSION['id'];

        if (mysqli_query($mysqli, $sql)) {
            echo "<h4> Usuario Editado com sucesso !</h4>";
        } else {
            echo "Erro !" . mysqli_connect_error($mysqli);
        }
        mysqli_close($mysqli);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Edição</title>
    <!-- links das biblioetecas-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

    <!-- Website CSS style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    


    <style type="text/css">
        input {
            float: center;
            width: 8%;
        }
        body{
            height: 30px;
            font-size: 11pt;  
           margin: 10px;
        }
        #editar_input{
            width: 10%;
        }   
    </style>

</head>

<body>


    <h1>Editar Usuário</h1>
    <br></br>
    <h4>ID selecionado: <?php echo $_SESSION['id']; ?></h4>
    <form action="" method="POST">

        <div class="form-group">
            <hr>
            <label for="" class="cols-sm-2 control-label">Nome</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"> <i class="fa fa-user fa" aria-hidden="true"> </i> </span>
                    <input type="text" name="nome" placeholder="Insira seu nome" />
                </div>
            </div>
        </div>

        <label for="" classe="cols-sm-2 control-label"> Email</label>
        <div class="cols-sm10">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                <input type="text" name="email" placeholder="Insira seu email" />
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
        <button class="col-md-1,5 btn btn-success"> Editar Cadastro </button>
        <br>
    </form>
    <a href="painel2.php?i=back"> <br> <button> Voltar </button> </a>
</body>

</html>