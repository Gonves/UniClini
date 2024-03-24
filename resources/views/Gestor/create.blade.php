<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UNICLINI</title>
</head>
<body>
    <form action="{{route('registrar_gestor')}}" method="POST">
    <label for=""> Nome </label > <br>
        <input type="text" name="Nome" required> <br>
    <label for="">Senha</label> <br>
        <input type="password" name="Senha" required> <br>
    <label for="">Email</label> <br>
        <input type="text" name="Email" required> <br>
      <button type="submit" name="Enviar"> ENVIARr  </button>

    </form>
</body>
</html>
