<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Models\Medico;

class PacienteController extends Controller
{

    public function create()
    {
        $paciente = Paciente::all();
        return view('Paciente.create', compact('paciente'));
    }

    public function store(Request $request)
    {
        $paciente = Paciente::create([
            'nome' => $request->input('nome'),
            'cpf' => $request->input('cpf'),
            'email' =>   $request->input('email'),
            'plano_saude' =>   $request->input('plano_saude'),
        ]);
        return redirect()->route('paciente_index');
    }

    public function update(Request $request, $id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->update($request->all()([
            'nome' => $request->input('nome'),
            'cpf' => $request->input('cpf'),
            'email' =>   $request->input('email'),
            'plano_saude' =>   $request->input('plano_saude'),

        ]));

        $paciente->consulta()->sync($request->input('consultas'));
        return redirect()->route('paciente_index')->with('success', 'Paciente atualizado com sucesso.');
    }
    public function index()
    {
        $paciente = Paciente::all();
        $consult = Consulta::all();
        return view('paciente.index', compact('paciente', 'consult'));
    }
    public function destroy($id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->delete();
        return redirect()->route('paciente_index')->with('success', 'Paciente foi removido.');
    }
}
