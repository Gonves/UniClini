<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gestor;

class GestorController extends Controller
{
    public function create()
    {
        $gestor = Gestor::all();
        return view('Gestor.create');
    }
    public function store(Request $request)
    {
        $gestor = Gestor::create([
            'nome'  =>   $request->input('nome'),
            'cpf' =>   $request->input('cpf'),
            'senha' =>   $request->input('senha'),

        ]);
        return  $mensagem_gestor = "Gestor cadastrado com sucesso";
    }
    public function show($id)
    {
        $gestor = Gestor::findOrFail($id);
        return view('gestor.show', ['gestor' => $gestor]);
    }
}
