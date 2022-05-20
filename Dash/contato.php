<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>
<div class="sidenav" id="right">
    <link rel="stylesheet" href="/login_registro/css/LOGIN2.css">
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
        <label><b>Localização</b></label>
        <div class="form-group " id="dropdown_country">
            <div class="form-control">
                <!-- <select name="pais" class="countries order-alpha" id="countryId">
                        <option value="">Selecione o pais</option>
                    </select> -->
                <select name="estado12" class="states order-alpha" id="stateId">
                    <option value="">Selecione o estado</option>
                    <?php
                    include('local.php');
                    include('conexao.php');

                    foreach ($estados as $estado) {
                        echo "<option value='" . $estado['sigla'] . "'>" . $estado['nome'] . "</option>";
                    }
                    //$selecionar_estado = ($_POST[$estado['sigla']]);
                    ?>
                </select>
                <select name="municipio" class="cities order-alpha" id="cityId">
                    <?php
                    //$select ="SELECT * FROM municipio WHERE nome= $selecionar_estado";

                    //foreach ($select as $dados) { 
                    //echo "<option value='" . $dados['nome'] . "'>" . "</option>"; 
                    ?>"

                    <?php //if($select == $dados['nome'])
                    //{ echo "selected"; } 
                    ?>>
                    <?php //echo $dados['nome']; 
                    ?>

                    <?php //} 
                    ?>
                </select>

            </div>

            <div class="form-group">
                <br>
                <label><b>Descrição</b></label>
                <textarea id="" name="descricao" class="form-control" required placeholder="Insira um comentário"></textarea>
            </div>            
            <br>
        </div>
        <button class="col-md-1,5 btn btn-success"> Enviar </button>
        <br>
        <br>
        <a href="/login_registro/Dash/index.php"><button class="btn btn-primary" type="button"> Voltar</button></a>
    </form>
    <?php
    if ($_POST) {

        if (isset($_POST['nome1']) || isset($_POST['estado12']) || isset($_POST['municipio']) || isset($_POST['email1']) || isset($_POST['setor1']) || isset($_POST['descricao'])) {

            if (strlen($_POST['nome1']) == 0) {
                echo "<h4> Preencha seu nome </h4>";
            } else 
                    if (strlen($_POST['estado12']) == 0) {
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
        $estado1 = ($_POST['estado12']);
        //$municipio1 = ($_POST['municipio']);
        $email1 = ($_POST['email1']);
        $setor1 = ($_POST['setor1']);
        $descricao = ($_POST['descricao']);

        if (!empty($_POST['nome1']) and (!empty($_POST['estado12'])) and (!empty($_POST['email1'])) and (!empty($_POST['setor1'])) and (!empty($_POST['descricao']))) {

            $sql = "INSERT INTO acesso_local(nome, email, setor, estado, descricao) VALUES ('$nome1','$email1','$setor1','$estado1','$descricao')";

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
</html>

