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
        return view('consulta.create');
    }
    public function store(Request $resquest){
        Consulta::create([
            'nome_consulta' => $resquest -> nome_consulta,
            'descricao_consulta' => $resquest -> descricao_consulta,
        ]) ;
        return redirect()->route('consulta_index');
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
