<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function create()
    {
        $funcionario = Funcionario::all();
        return view('Funcionario.create');
    }

    public function store(Request $request)
    {


        $funcionario = Funcionario::create([
            'nome' => $request->input('nome'),
            'cpf' => $request->input('cpf'),
            'senha' =>   $request->input('senha'),
            'funcao' => $request->input('funcao')
        ]);
        return $mensagem_funcionario = "Funcionario cadastrado com sucesso";
    }
}
