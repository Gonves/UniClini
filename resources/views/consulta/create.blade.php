<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>

        body {
            background-color: var(--color1, #F7F7F7);
            color: var(--color3, #025955);
        }
        .card {
            background-color: var(--color2, #80AAA8);
            color: var(--color1, #F7F7F7);
        }
        .card-title {
            color: var(--color1, #F7F7F7);
        }
        .form-control {
            background-color: var(--color1, #F7F7F7);
            color: var(--color3, #025955);
        }
        .btn-primary {
            background-color: var(--color4, #015450);
            border-color: var(--color4, #015450);
        }
    </style>
</head>
<body>
    @include('miscellaneous.nav')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Cadastro de Consultas</h2>
                        <form action="{{ route('registrar_consulta') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome da Consulta</label>
                                <input type="text" class="form-control" id="nome" name="nome_consulta" required>
                            </div>
                            <div class="form-group">
                                <label for="descricao">Descrição da Consulta</label>
                                <input type="text" class="form-control" id="descricao" name="descricao_consulta" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
