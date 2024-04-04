<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diretor</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/formularios-css/funPacMed.css">
</head>
<body>
    <style>
        /* Custom CSS */
        body {
            background-color: var(--color1, #F7F7F7);
            color: var(--color3, #025955);
        }
        .bg-dark {
            background-color: var(--color4, #015450) !important;
        }
        .text-white {
            color: var(--color1, #F7F7F7) !important;
        }
        .btn-primary {
            background-color: var(--color2, #80AAA8);
            border-color: var(--color2, #80AAA8);
        }
        .card {
            background-color: var(--color1, #F7F7F7);
            color: var(--color3, #025955);
        }
        .card-title {
            color: var(--color2, #80AAA8);
        }
        .subtitle {
            color: var(--color3, #025955);
        }
        .form-control {
            background-color: var(--color1, #F7F7F7);
            color: var(--color3, #025955);
        }
    </style>
<!--CABEÇALHO -->
<header class="bg-dark text-white py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Med Software</h1>
            </div>
            <div class="col-md-6 text-right">
                <nav class="menu">
                    <a href="#" class="text-white">Início</a>
                    <a href="#" class="text-white">Configurações</a>
                </nav>
            </div>
        </div>
    </div>
</header>
<!--CABEÇALHO -->
@include('miscellaneous.nav')

<!--PRINCIPAL -->
<main>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Cadastro de Diretor</h2>
                        <p class="card-text subtitle">Por favor, adicione as informações do profissional.</p>
                        <form class="form" action="{{ route('registrar_gestor') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome completo:</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo" required>
                            </div>
                            <div class="form-group">
                                <label for="cpf">CPF:</label>
                                <input type="number" class="form-control" id="cpf" name="cpf" placeholder="CPF" required>
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha:</label>
                                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
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

<!--RODAPÉ -->
<footer class="bg-dark text-white py-3 text-center">
    <h2>Med Software</h2>
    <p>©️2024 Galerinha Corporation</p>
</footer>
<!--RODAPÉ -->

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2
