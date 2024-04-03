<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medico;

class MedicoController extends Controller
{
   public function create(){
    $medico = Medico::all();
    return view('Medico.create') ;
   }
   public function store (Request $request){
    $medico = Medico::create([
        'nome' => $request -> input('nome'),
        'senha' =>   $request -> input ('senha'),
        'cpf' => $request -> input('cpf'),
        'especialidade' => $request -> input ('especialidade'),
    ]);
        return "Medico cadastrado com sucessor";
   }
}
