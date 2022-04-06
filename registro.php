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
    //$cadastro = ($_GET['cadastro']);
    if (!empty($_POST['email']) and (!empty($_POST['nome'])) and (!empty($_POST['senha']))) {

        $sql = "INSERT INTO acesso_novo(nome, email, senha) 
            VALUES ('$nome1', '$email1', '$senha1')";

        if (mysqli_query($mysqli, $sql)) {
            echo "<h4> Usuario cadastrado com sucesso !</h4>";
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
    <title>Tela de Registro</title>
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

</head>

<body>
    <h1>Cadastro de Usuario</h1>
    <form action="" method="POST">

        <div class="form-group">
            <hr>
            <label for="" class="cols-sm-2 control-label">Nome</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"> <i class="fa fa-user fa" aria-hidden="true"> </i> </span>
                    <input type="text"  name="nome" placeholder="Insira seu nome" />
                </div>
            </div>
        </div>

        <label for="" classe="cols-sm-2 control-label"> Email</label>
        <div class="cols-sm10">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                <input type="email"  name="email" placeholder="Insira seu email" />
            </div>
        </div>
        
        <br>
        <label for=""class="cols-sm-2 control-label"> Senha</label>
        <div class="cols-sm10">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
                <input type="password"  name="senha" placeholder="Insira sua senha" />
            </div>
        </div>
        <br>
        <br>
        <button class="col-md-1,5 btn btn-success"> Cadastrar </button>
        <br>
    </form>
    <a href="login.php?i=back"> <br> <button> Voltar</button> </a>
</body>

</html>