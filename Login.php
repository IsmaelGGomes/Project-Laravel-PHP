<?php

use Symfony\Component\VarDumper\VarDumper;

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
    <link rel="stylesheet" href="css/style2.css">

</head>

<body>

    <div class="sidenav">
        <div class="login-main-text">
            <h2>Tela de Login<br></h2>
        </div>
    </div>
    <div class="main" id="left">
        <link rel="stylesheet" href="css/LOGIN.css">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form action="" method="POST">

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
                    <button type="submit" class="btn btn-black">Entrar</button>

                </form>
                <a href="registro.php?x=pagina"><br><button type="submit" class="btn btn-secondary">Registrar</button> </a>
            </div>
        </div>
    </div>
    <div class="sidenav" id="right">
        <link rel="stylesheet" href="css/LOGIN.css">
        <div class="login-main-text1">
            <h2>Formulario de Contato<br></h2>
        </div>
        <form action="" method="POST">

            <div class="form-group">
                <label><b>Nome</b></label>
                <input type="text" class="form-control" placeholder="Insira seu nome completo" name="nome1" id="input_email">
            </div>
            <div class="form-group">
                <label><b>Email</b></label>
                <input type="email" class="form-control" placeholder="Insira o e-mail" name="email1" id="input_senha">
            </div>
            <label><b>Setor</b></label>
            <select class="form-control" id="dropdown" name="setor1">
                <option>Biblioteca</option>
                <option>Estacionamento</option>
                <option>TI</option>
                <option>Master</option>
            </select>
            <br>
            <div class="form-group " id="dropdown_country">
                <div class="form-control">
                    <!-- <select name="pais" class="countries order-alpha" id="countryId">
                        <option value="">Selecione o pais</option>
                    </select> -->
                    <select name="estado" class="states order-alpha" id="stateId">
                        <option value="">Selecione o estado </option>
                        <?php
                        include('local.php');
                        include('conexao.php');

                        foreach ($estados as $estado) {
                            echo "<option value='" . $estado['sigla'] . "'>" . $estado['nome'] . "</option>";
                        }
                        ?>
                    </select>
                    <select name="municipio" class="cities order-alpha" id="cityId">
                        <option value="">Selecione a cidade</option>
                    </select>
                    

                </div>
                <?php
                    $municipios2 = array(
                        1100015 => "Alta Floresta D'oeste", "estado" => "pr",
                        1100023 => "Ariquemes",
                        1100031 => "Cabixi",
                        1100049 => "Cacoal",
                        1100056 => "Cerejeiras",
                        1100064 => "Colorado do Oeste",
                        1100072 => "Corumbiara",
                        1100080 => "Costa Marques",
                    );
                    

                    ?>
                <div class="form-group">
                    <br>
                    <label><b>Descrição</b></label>
                    <textarea id="" name="descricao" class="form-control" required placeholder="Insira um comentário"></textarea>
                </div>
                <br>


            </div>
            <button class="col-md-1,5 btn btn-success"> Enviar </button>
        </form>
        <?php
        if ($_POST) {

            if (isset($_POST['nome1']) || isset($_POST['estado']) || isset($_POST['municipio']) || isset($_POST['email1']) || isset($_POST['setor1']) || isset($_POST['descricao'])) {

                if (strlen($_POST['nome1']) == 0) {
                    echo "<h4> Preencha seu nome </h4>";
                } else 
                    if (strlen($_POST['estado']) == 0) {
                    echo "<h4> Selecione o Estado </h4>";
                } else 
                    if (strlen($_POST['email1']) == 0) {
                    echo "<h4> Preencha seu email </h4>";
                } else 
                    if (strlen($_POST['setor1']) == 0) {
                    echo "<h4> Selecione o setor </h4>";
                } else 
                    if (strlen($_POST['descricao']) == 0) {
                    echo "<h4> Descreva o relato </h4>";
                }
            }

            $nome1 = ($_POST['nome1']);
            $estado1 = ($_POST['estado']);
            $municipio1 = ($_POST['municipio']);
            $email1 = ($_POST['email1']);
            $setor1 = ($_POST['setor1']);
            $descricao = ($_POST['descricao']);

            if (!empty($_POST['nome1']) and (!empty($_POST['estado'])) and (!empty($_POST['email1'])) and (!empty($_POST['setor1'])) and (!empty($_POST['descricao']))) {

                $sql = "INSERT INTO acesso_local(nome, email, setor, estado, municipio, descricao) VALUES ('$nome1','$email1','$setor1','$estado1','$municipio1','$descricao')";

                if (mysqli_query($mysqli, $sql)) {
                    echo "<h4> Enviado !</h4>";
                } else {
                    echo "Erro ao conectar banco de dados !" . mysqli_connect_error($mysqli);
                }
                mysqli_close($mysqli);
            }
        }

        ?>
    </div>
</body>

</body>

</html>