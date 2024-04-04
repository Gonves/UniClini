<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro dos Pacientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@include('miscellaneous.nav');
<div class="container">
    <h1>Registro dos Pacientes</h1>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
        <tr>
            <th scope="col">NOME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">CPF</th>
            <th scope="col">PLANO DE SAUDE</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->nome }}</td>
                <td>{{ $paciente->cpf }}</td>
                <td>{{ $paciente->plano_saude }}</td>
                <td>
                    <ul>
                        @foreach($paciente->consultas as $consulta)
                            <li>{{ $consulta->nome_consulta }}</li>
                        @endforeach
                    </ul>

                <td>
                    <form action="{{ route('excluir_paciente', $pacientes->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-dark btn-sm">Apagar</button>
                    </form>
                    <button class="btn btn-secondary btn-sm"
                            onclick="openEditModal('{{ $paciente->nome }}', '{{ $paciente->cpf }}' '{{ $paciente->plano_saude }}')">Editar
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Paciente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm" method="POST" action="{{route('alterar_paciente', $pacientes->id )}}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>
                    <div class="mb-3">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="tel" class="form-control" id="cpf" name="cpf">
                    </div>
                    <div class="mb-3">
                        <label for="plano_saude" class="form-label">PLANO DE SAUDE</label>
                        <input type="text" class="form-control" id="plano_saude" name="plano_saude">
                    </div>


                    <div class="mb-3">
                        <label for="consultas" class="form-label">Consultas</label>
                        <select class="form-select" id="Consultas" name="so[]" multiple>
                            @foreach($consul as $consulta)
                                <option value="{{ $consulta->id }}"
                                    {{ $paciente->disciplinas->contains($consulta) ? 'selected' : ' ' }}>
                                    {{ $consulta->nome_conulta }}
                                </option>
                            @endforeach
                        </select>
                    </div>



                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function openEditModal(nome, cpf, plano_saude) {
        $('#nome').val(nome);
        $('#cpf').val(cpf);
        $('#plano_saude').val(plano_saude);
        var myModal = new bootstrap.Modal(document.getElementById('editModal'), {
            keyboard: false
        });
        myModal.show();
    }
</script>

</body>
</html>
