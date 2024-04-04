<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: var(--color1, #F7F7F7);
            color: var(--color3, #025955);
        }
        .container-fluid {
            background-color: var(--color4, #015450);
            color: var(--color1, #F7F7F7);
        }
        .container-fluid h1 {
            font-size: 3rem;
            margin-bottom: 0;
            color: var(--color1, #F7F7F7); /* Letras brancas */
        }
        .container-fluid p {
            font-size: 1.5rem;
            margin-top: 0.5rem;
            color: var(--color1, #F7F7F7); /* Letras brancas */
        }
    </style>
</head>
<body>
    @include('miscellaneous.nav')

<div class="container-fluid text-center py-5">
    <h1 style="color: var(--color2, #80AAA8);">UNICLINI</h1>
    <p>Agende sua consulta conosco.</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
