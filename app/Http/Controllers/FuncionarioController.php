<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function create(){
        $funcionario = Funcionario::all();
        return view('Funcionario.create');
    }

    public function store(Request $request){
        $funcionario = Funcionario::create([
            'nome' => $request -> input('nome'),
            'email' => $request -> input('email'),
            'senha' => $request -> input('senha')
        ]);
        return $mensagem_funcionario = "Funcionario adicionado no sistema, seja bem-vindo" ;
    }
}
