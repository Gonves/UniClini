<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function index(){
        $consulta =Consulta::all();
        return view('consulta.index', compact('consulta'));
    }
    public function create(){
        return view('Consulta.create');
    }
    public function store(Request $request){
        Consulta::create([
            'nome_consulta' => $request -> input('nome_consulta'),
            'descricao_consulta' => $request -> input('descricao_consulta'),
        ]) ;
        return $mensagem_consulta = "Consulta cadastrada com sucesso";
    }
    public function update(Request $request, $id)
    {
        $consulta = Consulta::findOrFail($id);
        $consulta ->update($request->all());
        return redirect()->route('consulta_index')->with('success', 'A consulta foi atualizada .');
    }
    public function destroy($id){
        $consulta = Consulta::findOrFail($id);
        $consulta->delete();
        return redirect()->route('consulta_index')->with('success', 'Consulta apagada com sucesso.');
    }
}
