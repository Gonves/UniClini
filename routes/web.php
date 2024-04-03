<?php

use App\Http\Controllers\GestorController;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Promise\Create;
use App\Http\Controllers\FuncionarioController;
use App\Models\Medico;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use App\Models\Consulta;
use App\Models\Gestor;
use App\Models\Paciente;
use App\Notifications\PostReplyNotification;
use App\Http\Controllers\ConsultaController ;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// route gestor
Route::get ('/gestor',[GestorController::class, 'create']) -> name('gestor_create')  ;

Route::post('/gestor/novo', [GestorController::class, 'store'])-> name('registrar_gestor');
// Route::get('/gestor/ver/{gestor}', [GestorController::class, 'show'])->name('gestor.show');

// route funcionario
Route::get('/funcionario', [FuncionarioController::class, 'create']) -> name('funcionario_create');
Route::post('/funcionario/novo', [FuncionarioController::class, 'store']) -> name('registrar_funcionario');

// route medico
Route::get('/medico', [MedicoController::class, 'create']) -> name('medico_create');
Route::post('/medico/novo', [MedicoController::class, 'store']) -> name('registrar_medico');


// route paciente
Route::get('/paciente', [PacienteController::class, 'index'])->name('paciente_index');
 Route::get('/paciente/novo',[PacienteController::class, 'create'])->name('paciente_create');

Route::post('paciente/novo', [PacienteController::class, 'store'])->name('registrar_paciente');
Route::delete('/paciente/{id}', [PacienteController::class, 'destroy'])->name('excluir_paciente');
Route::put('/paciente/{id}', [PacienteController::class, 'update'])->name('alterar_paciente');

// route consulta
Route::get('/consulta',[ConsultaController::class, 'index'])->name('consulta_index');
 Route::get('/consulta/novo', [ConsultaController::class, 'create'])->name('consulta_create');
Route::post('/consulta/novo', [ConsultaController::class, 'store'])->name('registrar_consulta');
 Route::delete('/consulta/{id}', [ConsultaController::class, 'destroy'])->name('excluir_consulta');
 Route::put('/consulta/{id}', [ConsultaController::class, 'update'])->name('alterar_consulta');

