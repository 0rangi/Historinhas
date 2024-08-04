<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorGenero extends Controller
{
    public function index()
    {
        $dados = Genero::all();
        return view('mostrarGenero', compact('dados'));
    }

    public function create()
    {
        return view('criargenero');
    }

    public function store(Request $request){
        $dados = new Genero();
        $dados->nomeGen = $request->input('nomeGen');
        $dados->descricao = $request->input('descricao');
        if($dados->save())
            return redirect('/genero')->with('success', 'Gênero cadastrado com sucesso!! :)');
        return redirect('/genero')->with('danger', 'Erro ao cadastrar gênero!:(');
    }

    public function show(string $id)
    {
        
    }

   
    public function edit(string $id)
    {
        $dados = Genero::find($id);
        if(isset($dados))
            return view('editarGenero', compact('dados'));
        return redirect('/genero')->with('danger', 'Cadastro do genero não localizado!');
    }

    public function update(Request $request, string $id){
        $dados = Genero::find($id);
        if(isset($dados)){
            $dados->Nome = $request->input('nomeGen');
            $dados->Descricao = $request->input('descricao');
            $dados->save();
            return redirect('/genero')->with('success', 'Cadastro do gênero atualizado com sucesso!!');
        }
        return redirect('/genero')->with('danger', 'Cadastro de genero não localizado!');
    
    }


    public function destroy(string $id){
        $dados = Genero::find($id);
        if(isset($dados)){
            $historias = HistoriasGenero::where('genero_id', '=', $id)->first();
            if(!isset($historias)){
                $dados->delete();
                return redirect('/genero')->with('success', 'Cadastro do gênero deletado com sucesso!!');
            }else{
                return redirect('/genero')->with('danger', 'Cadastro não pode ser excluído!!');
            } 
        }else{
            return redirect('/genero')->with('danger', 'Cadastro não localizado!!');
        } 
    }
    public function pesquisaGenero(){
        $dados = array("tabela" => "genero");
        return view('pesquisa', compact('dados'));
    }

    public function procuraGenero(Request $request){
        $nome = $request->input('texto');
        $dados = DB::table('Generos')->select('id', 'NomeGen', 'descricao')->where(DB::raw('lower(NomeGen)'), 'like', '%' . strtolower($nome) . '%')->get();
        return view('mostrarGenero', compact('dados'));
    } 
 
}