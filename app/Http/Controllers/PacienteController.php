<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Models\Medico;

class PacienteController extends Controller
{

    public function create(){
        $paciente = Paciente::all();
        return view('Funcionario.create');
    }

    public function store(Request $request){
       $paciente = Paciente::create([
            'nome' => $request -> input('nome'),
            'cpf' => $request -> input('cpf'),
            'email' =>   $request -> input ('email'),

        ]);
        $paciente ->consulta()->attach($request->input('consultas'));
        return redirect()->route('pacientes_index');

    }

    public function update(Request $request, $id){
        $paciente = Paciente::findOrFail($id);
        $paciente -> update($request->all([
            'nome' => $request->input('nome'),
            'cpf' => $request->input('cpf'),
            'email' =>   $request -> input ('email'),

        ]));

        $paciente->consulta()->sync($request->input('consultas'));
        return redirect()->route('paciente_index')->with('success', 'Paciente atualizado com sucesso.');
    }
    public function index(){
        $paciente = Paciente::all();
        $consul = Consulta::all();
        return view('paciente.index', compact('paciente', 'consulta'));
    }
    public function destroy($id){
        $paciente = Paciente::findOrFail($id);
        $paciente->delete();
        return redirect()->route('paciente_index')->with('success', 'Paciente foi removido.');
    }
}
