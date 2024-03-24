<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UNICLINI</title>
</head>
<body>
    <form action="{{route('registrar_funcionario')}}" method="post">
        @csrf
        <h1>Cadastro da Recepção </h1> <br>
    <label for="nome"> Nome: </label > <br>
        <input type="text" name="nome" required> <br>
    <label for="email">Email: </label> <br>
        <input type="email" name="email" required> <br>
    <label for="senha">Senha: </label> <br>
        <input type="password" name="senha" required> <br>
      <button> ENVIAR </button>

    </form>
</body>
</html>
