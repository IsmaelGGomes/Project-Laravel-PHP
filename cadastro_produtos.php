<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<form method="POST" action="">

    <div class="container-fluid">
        <section class="container">
            <div class="container-page">
                <div class="col-md-7">

                    <h2 class="dark-grey">Cadastro</h2>

                    <div class="form-group col-lg-6">
                        <div class="form-group">
                            <label>Produto</label>
                            <input type="text" name="nome_produto" class="form-control" id="" value="" placeholder="Nome do produto">
                        </div>
                        <label>Lotação</label>
                        <input type="text" name="local" class="form-control" id="" value="" placeholder="Local">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Descrição</label>
                        <input type="text" name="descricao" class="form-control" id="" value="" placeholder="Descrição">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>valor</label>
                        <input type="" name="valor" class="form-control" id="" value="" placeholder="Valor do produto">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Quantidade</label>
                        <input type="" name="qtd" class="form-control" id="" value="" placeholder="Insira a quantidade">
                    </div>
                    <?php


                    include("Conexao.php");

                    //Incremento de dados
                    if ($_POST) {

                        $nome_produto = ($_POST['nome_produto']);
                        $local = ($_POST['local']);
                        $descricao = ($_POST['descricao']);
                        $valor = ($_POST['valor']);
                        $qtd = ($_POST['qtd']);

                        if (!empty($_POST['nome_produto']) and (!empty($_POST['local'])) and (!empty($_POST['descricao'])) and (!empty($_POST['valor'])) and (!empty($_POST['qtd']))) {

                            $sql = "INSERT INTO produtos(produto, lotacao, descricao, valor, qtd) 
                        VALUES ('$nome_produto', '$local', '$descricao', '$valor', '$qtd')";

                            if (mysqli_query($mysqli, $sql)) {
                                echo "<h4> Produto cadastrado!</h4>";
                            } else {
                                echo "Erro !" . mysqli_connect_error($mysqli);
                            }
                            mysqli_close($mysqli);
                        }
                    }

                    ?>

                    <!-- <div class="col-sm-6">
					<input type="checkbox" class="checkbox" />Sigh up for our newsletter
				</div>

				<div class="col-sm-6">
					<input type="checkbox" class="checkbox" />Send notifications to this email
				</div>	 -->

                </div>

                <div class="col-md-7">
                    <!--  <h3 class="dark-grey">Inserir Produto</h3> -->
                    <button class="btn btn-success">Adicionar</button>
                    <a href="imprimir.php?=relatorio_de_itens_cadastrados"><button class="btn btn-warning" type="button">Relatório de Produtos</button></a>
                </div>

            </div>
        </section>
    </div>
</form>