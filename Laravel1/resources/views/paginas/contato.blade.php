@extends('layouts.dash_principal')

@section('title', 'Contato')

@section('content')


<div class="container">

    <div class="login-main-text1">
        <h2>Formulario de Contato<br></h2>
    </div>
    <form action="/lista" method="POST">

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

                    @foreach( $estados as $estado)

                    <?php echo "<option value='" . $estado['sigla'] . "'>" . $estado['nome'] . "</option>"; ?>

                    @endforeach

                    <!-- $selecionar_estado = ($_POST[$estado['sigla']]); -->

                </select>
                <select name="municipio" class="cities order-alpha" id="cityId">

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
        
    </form>
</div>

@endsection