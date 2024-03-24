<?php

use App\Http\Controllers\GestorController;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Promise\Create;
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

Route::get ('/gestor',[GestorController::class, 'create'] );
Route::post('/gestor/novo', [GestorController::class, 'store'])-> name('registrar_gestor');
