<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
</head>
<body>

    <h1>Esse é um teste</h1>
    @if (126>15)
        <p>A condição da chave é verdadeira</p>
      @else
      <p>A condição é falsa</p>
    @endif
    <p> {{$nome}}</p>
    <a href="rolagem"><button>Novo</button><br></a>
    <br>
    
    <a href="registro"><button>Botão2</button></a>
</body>
</html>