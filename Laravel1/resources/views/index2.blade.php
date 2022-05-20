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
            <th>Titulo</th>
            <th>Descrição</th>
        </thead>
        <tbody>
            @foreach ( $events as $event )
            <tr>
                <td>{{ $event->id }}<br></td>
                <td>{{ $event->title }} <br></td>
                <td>{{ $event->description }}<br></td>
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