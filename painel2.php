<?php

session_start();
include('conexao.php');

if (isset($_GET['acao'])) {

    if ($_GET['acao'] == "deletar") {
        $id = $_GET['id'];

        $sql_delete = "DELETE FROM acesso_novo WHERE id= $id";

        if ($mysqli->query($sql_delete) === TRUE) {
            echo "ok";
        } else {
            echo "Erro ao deletar !" . $mysqli->error;
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

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    

    <title>Painel</title>
</head>

<body>
   
    <h3><b>Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?></b></h3>
    <p>
    <section id="esquerda">

        <head>
            <link rel="stylesheet" href="style2.css">
            <br>
            <form action="" method="POST" name="form1">
                <p>

                    <b>
                        <h4> Confirmar informações<br></h4>
                    </b>
                    <b>ID Usuário: </b><?php echo $_SESSION['id']; ?><br>
                <p>
                    <input type='text' name='nome' placeholder="Confirme o nome">
                <p>
                    <input type='text' name='email' placeholder="Confirme o email">
                <p>
                    <input type='password' name='senha' placeholder="Confirme o senha">
                <p>
                    <button name="botao1">Confirmar</button>
                <p>
            </form>
    </section>
    <?php

    if (!empty($_POST['email']) and (!empty($_POST['nome'])) and (!empty($_POST['senha']))) {

        if ($_POST['email'] != $_SESSION['email']) {
            echo "<h4> Email incorreto ! </h4>";
        } else 
                        if ($_POST['senha'] != $_SESSION['senha']) {
            echo "<h4> Senha Incorreta !</h4>";
        } else 
                        if ($_POST['nome'] != $_SESSION['nome']) {
            echo "<h4> Nome incorreto !</h4>";
        } else {
            echo ("<h4> Todas as informações estão ok ! </h4> ");
        }
        $nome1 = ($_POST['nome']);
        $email1 = ($_POST['email']);
        $senha1 = ($_POST['senha']);
    }

    ?>
    </p>

    </head>
    </p>

    <p>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

    <section id="direita">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col col-xs-6">

                                    <p>
                                    <form action="" method="GET">

                                        <input type="text" name="name" size="8" placeholder=" Insira o ID">
                                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                                    </form>
                                    </p>

                                </div>
                                <div class="col col-xs-6 text-right">

                                    <a href="registro.php?=cadastro"> <button type="button" class="btn btn-sm btn-primary btn-create">Novo Cadastro</button></a>
                                    <a href="rolagem2.php?=cadastro"> <button type="button" class="btn btn-sm btn-primary btn-create">Lista de Registros</button> </a>

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

                                        $id_pesquisa = $pesquisar = filter_input(INPUT_GET, 'id');

                                        $id_pesquisa_name = $pesquisar = filter_input(INPUT_GET, 'name');
                                        //$resultado_pesquisa = "SELECT * FROM acesso_novo WHERE id= $id_pesquisa_name";

                                        //$resultado_query = mysqli_query($mysqli, $resultado_pesquisa);

                                        //$_SESSION['id'] = $pesquisar;

                                        $resultado_pesquisa = "SELECT * FROM acesso_novo WHERE id=$pesquisar";
                                        $resultado_query = mysqli_query($mysqli, $resultado_pesquisa);


                                        if ($resultado_query->num_rows == 1) {

                                            while ($proc1 = mysqli_fetch_assoc($resultado_query)) {
                                        ?>
                                    <tr>
                                        <td align="center">
                                            <a class="btn btn-default" href="pag_editar.php?=cadastro"><em class="fa fa-pencil"></em></a>

                                            <a class="btn btn-danger" href="painel2.php?acao=deletar&id=<?php echo $proc1['id'] ?>"><em class="fa fa-trash"></em></a>

                                        </td>
                                        <td><?php echo $proc1['id'] . "<br/>"; ?></td>
                                        <td><?php echo $proc1['nome'] . "<br/>"; ?></td>
                                        <td><?php echo $proc1['email'] . "<br/>"; ?></td>
                                        <td><?php echo $proc1['senha'] . "<br/>"; ?></td>
                                        <td><?php echo $proc1['setor'] . "<br/>"; ?></td>


                                    </tr>
                            <?php
                                            }
                                        } else {
                                            echo "<h4>ID Não encontrado </h4>";
                                        }

                            ?> <div class="panel-body">
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
                                    <?php } ?>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col col-xs-4">Pagina 1 a 5
                                </div>
                                <div class="col col-xs-8">
                                    <ul class="pagination hidden-xs pull-right">
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                    </ul>
                                    <ul>
                                        <?php echo "Deseja sair ?" ?>
                                        <li><a href=login.php>SAIR</a> </li>
                                    </ul>
                                    <ul class="pagination visible-xs pull-right">
                                        <li><a href="#">«</a></li>
                                        <li><a href="#">»</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
    /* $enviar = ($_POST[("enviar")]);
    ?>
    <form action="" method="POST">

        <button type=submit name=enviar> LISTAR TODOS </button>
        <?php
        $sql = mysqli_query($mysqli, "SELECT * FROM acesso_novo");
        if ($sql->num_rows == 1) {

            while ($proc = mysqli_fetch_assoc($sql)) {
                echo "<br/>";
                echo "-----------------------------------------<br />";
                echo "ID: " . $proc['id'] . "<br/>";
                echo "Email: " . $proc['email'] . "<br/>";
                echo "Senha: " . $proc['senha'];
            }
        }
 */
    ?>

    </form>


</body>

</html>