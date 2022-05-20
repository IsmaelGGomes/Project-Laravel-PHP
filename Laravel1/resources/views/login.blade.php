<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="panel-body">
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
            while ($proc1 = mysqli_fetch_assoc($cadastrar)) {
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
</body>

</html>