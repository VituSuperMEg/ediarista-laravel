<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;

class ServicoController extends Controller
{
    public function index () {

        // Paginação Simples ( Anterior e Próxima )
        // $servicos = Servico::simplePaginate(15);

        // Paginação Com Números
        $servicos = Servico::paginate(10);

        return view('servicos.index')->with('servicos', $servicos);
    }
    public function create() {

        return view('servicos.create');
    }
    public function store(Request $request) {

        $dados = $request->except('_token');
        Servico::create($dados);

        return redirect()->route('servicos.index');
    }
    public function edit(int $id) {
        $servico = Servico::findOrFail($id);

        return view('servicos.edit')->with('servico', $servico);
    }
    public function update(int $id, Request $request) {
        $dados = $request->except(['_token', '_method']);

        $servico = Servico::findOrFail($id);

        $servico->update($dados);

        return redirect()->route('servicos.index');
    }
}
