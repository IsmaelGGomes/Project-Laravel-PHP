<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">

                    <div class="row p-5">
                        <div class="col-md-12">
                            <div class="div-container-fluid">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Produto</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Lotação</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Descrição</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Valor</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Quantidade</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ( $query as $busca)
                                            <td> {{ $busca-> id }} <br></td>
                                            <td>{{ $busca-> nome_produto }} <br></td>
                                            <td>{{ $busca-> local }} <br></td>
                                            <td>{{ $busca-> descricao }} <br></td>
                                            <td>{{ $busca-> valor }} <br></td>
                                            <td>{{ $busca-> qtd }} <br></td>

                                           
                                        </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>