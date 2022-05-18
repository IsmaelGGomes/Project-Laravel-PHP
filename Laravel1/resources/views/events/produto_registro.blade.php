@extends('layouts.dash_principal')

@section('title','Cadastro Produtos')

@section('content')

<form action="/cadastro" method="POST">
    @csrf

    <div class="container-fluid">
        <section class="container">
            <div class="container-page">
                <div class="col-md-7">
                    <br>

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
                        <textarea type="text" name="descricao" class="form-control" id="" value="" placeholder="Descrição"></textarea>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>valor</label>
                        <input type="" name="valor" class="form-control" id="" value="" placeholder="Valor do produto">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Quantidade</label>
                        <input type="" name="qtd" class="form-control" id="" value="" placeholder="Insira a quantidade">
                    </div>


                    <div class="col-md-7">
                        <!--  <h3 class="dark-grey">Inserir Produto</h3> -->
                        <button class="btn btn-success">Adicionar</button>
                        <a href="imprimir.php?=relatorio_de_itens_cadastrados"><button class="btn btn-warning" type="button">Relatório de Produtos</button></a>
                    </div>

                </div>

            </div>
        </section>
    </div>
</form>
@endsection