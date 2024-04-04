<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionário</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/formularios-css/funPacMed.css">
    <style>
        /* Custom CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: var(--color1, #F7F7F7);
            color: var(--color3, #025955);
        }
        header {
            background-color: var(--color4, #015450);
        }
        header h1 {
            color: var(--color1, #F7F7F7);
        }
        .card {
            background-color: var(--color2, #80AAA8);
        }
        .card-title, .card-text.subtitle {
            color: var(--color1, #F7F7F7);
        }
    </style>
</head>
<body>
    @include('miscellaneous.nav')
<!--CABEÇALHO -->

<!--CABEÇALHO -->


<!--PRINCIPAL -->
<main>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Cadastro de Funcionário</h2>
                        <p class="card-text subtitle">Por favor, adicione as informações do Funcionário.</p>
                        <form class="form" action="{{ route('registrar_funcionario') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome completo:</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo" required>
                            </div>
                            <div class="form-group">
                                <label for="cpf">CPF:</label>
                                <input type="tel" class="form-control" id="cpf" name="cpf" placeholder="CPF" required>
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha:</label>
                                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
                            </div>
                            <div class="form-group">
                                <label for="funcao">Função:</label>
                                <input type="text" class="form-control" id="funcao" name="funcao" placeholder="Função" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--PRINCIPAL -->

<!--RODAPÉ --
