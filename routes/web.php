<?php

use App\Http\Controllers\GestorController;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Promise\Create;
use App\Http\Controllers\FuncionarioController;
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
Route::get ('/gestor',[GestorController::class, 'create']) -> name('gestor_create') ;
Route::post('/gestor/novo', [GestorController::class, 'store'])-> name('registrar_gestor');
// Route::get('/gestor/ver/{gestor}', [GestorController::class, 'show'])->name('gestor.show');
Route::get('/funcionario', [FuncionarioController::class, 'create']) -> name('funcionario_create');
Route::post('/funcionario/novo', [FuncionarioController::class, 'store']) -> name('registrar_funcionario');



