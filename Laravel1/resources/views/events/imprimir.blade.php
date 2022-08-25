
<title>Relatório</title>
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
                        <img src="https://i.ibb.co/6WRG2vR/icon.png" class="img-responsive img-fluid" alt="user-main">
                        </div>

                        <div class="col-md-6 text-right">
                        <button type="button" class="btn btn-secondary btn-lg" onclick="window.print()">Imprimir</button>
                        <br>
                        <br>
                            <!--adicionar um campo no qual fique uma sequencia de numeros para identificar 
                                o numero da impressão-->
                            <p class="font-weight-bold mb-1">Número de controle: <font color="#FF0000"><?php echo rand(1,1000); ?></font></p> 
                            <?php $hoje= date('d/m/Y')?>
                            <p class="text-muted"><?php echo $hoje?></p>
                        </div>
                    </div>

                    <hr class="my-6">

                    <div class="row pb-1 p-2">
                        <div class="col-md-6">
                            <p class="font-weight-bold mb-4">Informações do Cadastro</p>
                            <!-- INFORMAR AS DESCRIÇÕES DO LOGIN -->                           
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
                                 <!-- SELEÇÃO DE DADOS NA TABELA -->
                                <tbody>
                                    <tr>
                                        @foreach ($impressao as $imp)
                                        <td> {{ $imp-> id }} <br></td>
                                        <td>{{ $imp-> nome_produto }} <br></td>
                                        <td>{{ $imp-> local }} <br></td>
                                        <td>{{ $imp-> descricao }} <br></td>                                        
                                        <td>{{ $imp-> valor }} <br></td>
                                        <td>{{ $imp-> qtd }} <br></td>

                                        <td> R$ {{$imp ->qtd * $imp ->valor}}<br></td>
                                        

                                    </tr>
                                        @endforeach
                                </tbody>
                                
                            </table>
                        </div>
                    </div>

                    <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                        

                        <div class="py-3 px-5 text-right">
                            <div  class="h3 font-weight-light" >Total</div>

                            <div class="h3 font-weight-light">R$ {{$total}}</div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


