<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="2">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Setor</th>
        </thead>
        <tbody>
            @foreach ($dados as $dado)
            <tr>
                <td>{{ $dado->id }}<br></td>
                <td>{{ $dado->nome }} <br></td>
                <td>{{ $dado->email }}<br></td>
                <td>{{ $dado->senha }}<br></td>
                <td>{{ $dado->setor }}<br></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
<!-- <div>
    <h1>Listagem:</h1>

    @foreach ( $events as $event )
    <p>Nome: {{ $event->name }} -- {{ $event->description}}</p>
    @endforeach
</div> -->