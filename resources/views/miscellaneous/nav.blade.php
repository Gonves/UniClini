<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('welcome') }}">SISTEMA CLINICO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">

                    <!-- drop consulta -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="consultasDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Consulta
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="consultasDropdown">
                            <li><a class="dropdown-item" href="{{ route('registrar_consulta') }}">Cadastrar nova
                                    consulta</a></li>
                        </ul>
                    </li>
                    <!-- drop Medicos -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="medicosDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Medico
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="medicosDropdown">
                            <li><a class="dropdown-item" href="{{ route('registrar_medico') }}">Cadastrar novo
                                    Medico</a></li>
                        </ul>
                    </li>



                    <!-- drop gestao -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="gestorsDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Gestor
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="gestorsDropdown">

                            <li><a class="dropdown-item" href="{{ route('registrar_gestor') }}">Cadastrar Nova
                                    Gestão</a></li>
                        </ul>
                    </li>

                    <!-- Dropdown  paciente -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pacientesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Pacientes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="pacientesDropdown">
                            <li><a class="dropdown-item" href="{{ route('paciente_index') }}">Registro do paciente</a></li>
                            <li><a class="dropdown-item" href="{{ route('registrar_paciente') }}">Cadastrar novo
                                    Paciente</a></li>
                        </ul>
                    </li>

                    <!-- Dropdown   funcionario-->
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="funcionarioDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Funcionario
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="funcionarioDropdown">

                            <li><a class="dropdown-item" href="{{ route('funcionario_create') }}">Cadastrar novo
                                    Funcionario</a></li>
                        </ul>
                    </li>



                </ul>
            </div>
        </div>
    </nav>
</div>
