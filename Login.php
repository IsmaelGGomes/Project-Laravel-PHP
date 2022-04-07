<?php

if ($_POST) {
    //testando novo comentario 

    include('conexao.php');


    if (isset($_POST['email']) || isset($_POST['senha']) || isset($_POST['setor'])) {

        if (strlen($_POST['email']) == 0) {
            echo "Preencha seu e-mail";
        } else 
            if (strlen($_POST['senha']) == 0) {
            echo "Preencha sua senha";
        } else 
            if (strlen($_POST['setor']) == 0) {
            echo "Insira o setor";
        } else {
           
            $email = ($_POST['email']);
            $senha = ($_POST['senha']);
            $setor = ($_POST['setor']);
            
            $sql_code = "SELECT * FROM acesso_novo WHERE email = '$email' AND senha = '$senha' AND setor = '$setor'";
            $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

            $quantidade = $sql_query->num_rows;

            //echo $quantidade;
            //foi adicionado coisas novas para testar o diretorio da coisa

            if ($quantidade == 1) {

                $usuario = $sql_query->fetch_assoc();

                session_start();

                $_SESSION['email'] = $usuario['email'];
                $_SESSION['senha'] = $usuario['senha'];
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['setor'] = $usuario['setor'];

                header("Location: painel2.php");
            } else {
                echo "Falha ao logar ! E-mail ou senha ou setor incorretas !";
            }
        }
    }
}

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
    <link rel="stylesheet" href="style2.css">

</head>

<body>

    <div class="sidenav">
        <div class="login-main-text">
            <h2>Tela de Login<br></h2>
        </div>
    </div>
    <div class="main">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form action="" method="POST">
                    <div class="form-group">

                        <label><b>E-mail</b></label>
                        <input type="text" class="form-control" placeholder="Insira o e-mail" name="email" id="input_email">
                    </div>
                    <div class="form-group">
                        <label ><b>Senha</b></label>
                        <input type="password" class="form-control" placeholder="Insira a senha" name="senha" id="input_senha">
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
                    <button type="submit" class="btn btn-black">Entrar</button>

                </form>
                <a href="registro.php?x=pagina"><br><button type="submit" class="btn btn-secondary">Registrar</button> </a>
            </div>
        </div>
    </div>
</body>

</html>