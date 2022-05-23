<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
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
    <link rel="stylesheet" href="">

    <style type="text/css">
        body {
            width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
        #caixa_suspensa{

            height: 30px;
        }
        input{
            width: 500px;

        }
    </style>

</head>

<body>
    
    <center><h1>Registro</h1></center>
    <form action="/usuario_externo" method="POST">
        @csrf

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
        <div id="caixa_suspensa" class="form-group contrl">
            <label><b>Setor</b></label>
            <select class="form-control" id="registro_input" name="setor">
                <option>Biblioteca</option>
                <option>Estacionamento</option>
                <option>TI</option>
                <option>Master</option>
            </select>
        </div>
        <br>
        <br>
        <button class="col-md-1,5 btn btn-success" type="submit"> Cadastrar </button>
        <br>
    </form>
    <a href="/login"><br><button> Voltar</button> </a>
</body>

</html>