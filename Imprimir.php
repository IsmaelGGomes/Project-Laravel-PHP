<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
    body {
    background: grey;
    margin-top: 120px;
    margin-bottom: 120px;
}
</style>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row p-5">
                        <div class="col-md-6">
                        <img src="https://i.ibb.co/qDDxwXQ/user-main.jpg" class="img-responsive img-fluid" alt="user-main">
                        </div>

                        <div class="col-md-6 text-right">
                            <!--adicionar um campo no qual fique uma sequencia de numeros para identificar 
                                o numero da impressão-->
                            <p class="font-weight-bold mb-1">Invoice #550</p> 
                            <?php $hoje= date('d/m/Y')?>
                            <p class="text-muted"><?php echo $hoje?></p>
                        </div>
                    </div>

                    <hr class="my-5">

                    <?php session_start();
                    include("conexao.php");?>
                    

                    <div class="row pb-5 p-5">
                        <div class="col-md-6">
                            <p class="font-weight-bold mb-4">Informações do Cadastro</p>
                            <p class="mb-1"><b>ID: </b><?php echo $_SESSION['id'];?></p>
                            <p class="mb-1"><b>Nome: </b><?php echo $_SESSION['nome'];?></p>
                            <p class="mb-1"><b>Email: </b><?php echo $_SESSION['email'];?></p>
                            <p class="mb-1"><b>Setor: </b><?php echo $_SESSION['setor'];?></p>                            
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-4">Payment Details</p>
                            <p class="mb-1"><span class="text-muted">VAT: </span> 1425782</p>
                            <p class="mb-1"><span class="text-muted">VAT ID: </span> 10253642</p>
                            <p class="mb-1"><span class="text-muted">Payment Type: </span> Root</p>
                            <p class="mb-1"><span class="text-muted">Name: </span> John Doe</p>
                        </div>
                    </div>

                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Produto</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Lotação</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Descrição</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Valor</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Quantidade</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Subtotal</th>
                                    </tr>
                                </thead>
                                <?php //SELEÇÃO DE DADOS NA TABELA

                                include("conexao.php");

                                $resultado_pesquisa = "SELECT * FROM produtos";
                                $resultado_query = mysqli_query($mysqli, $resultado_pesquisa);
      
                                    while ($select = mysqli_fetch_assoc($resultado_query)) {
                
                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $select['id'] . "<br>"?></td>
                                        <td><?php echo $select['produto'] . "<br>"?></td>
                                        <td><?php echo $select['lotacao'] . "<br>"?></td>
                                        <td><?php echo $select['descricao'] . "<br>"?></td>                                        
                                        <td><?php echo $select['valor'] . "<br>"?></td>
                                        <td><?php echo $select['qtd'] . "<br>"?></td>
                                        <?php $subtotal= ($select['qtd'] * $select['valor'])?>
                                        <?php @$somartotal= $somartotal + $subtotal?>
                                        <td><?php echo "R$ " . $subtotal ."<br>"?></td>                                                                             
                                    </tr>
                                </tbody>
                                <?php } ?>
                            </table>
                        </div>
                    </div>

                    <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                        

                        <div class="py-3 px-5 text-right">
                            <div  class="h3 font-weight-light" >Total</div>

                            <div class="h3 font-weight-light"><?php echo "R$ ". $somartotal?></div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</div>


