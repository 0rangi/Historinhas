<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historia;

class ControladorHistorias extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $dados = Historia::all();
        return view('mostrarhistorias', compact('dados'));
    }

    public function create()
    {
        return view('criarhistoria');
    }

    public function store(Request $request){
        $dados = new Historia();
        $dados->nomeHist = $request->input('nomeHist');
        $dados->descricaoHist  = $request->input('descricaoHist');
        $dados->autor = $request->input('autor'); 
        $dados->paginas = $request->input('paginas');
        $dados->classificacao = $request->input('classificacao');
        
        if($dados->save())
            return redirect('/historia')->with('success', 'História cadastrado com sucesso!!');
        return redirect('/historia')->with('danger', 'Erro ao cadastrar história!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id){
        $dados = Historia::find($id);
        if(isset($dados))
            return view('editaHistoria', compact('dados'));
        return redirect('/historia')->with('danger', 'Cadastro do história não localizado!');
    }

    public function update(Request $request, string $id)
    {
        $dados = Historia::find($id);
        if(isset($dados)){
            $dados->nome_hist = $request->input('nome_hist');
            $dados->descricao_hist = $request->input('descricao_hist');
            $dados->autor = $request->input('autor'); 
            $dados->paginas = $request->input('paginas');
            $dados->classificacao_etaria = $request->input('classificacao_etaria');
            $dados->save();
            return redirect('/historia')->with('success', 'História cadastrado com sucesso!!');
        }else{
            return redirect('/historia')->with('danger', 'Cadastro do história não localizado!');
        }
    }


    public function destroy(string $id)
    {
        $dados = Historia::find($id);
        if(isset($dados)){
            $historias= Historia::where('id', '=', $id)->first();
            if(!isset($historias)){
                $dados->delete();
                return redirect('/historia')->with('success', 'Cadastro do historia deletado com sucesso!!');
            }else{
                return redirect('/historia')->with('danger', 'Cadastro não pode ser excluído!!');
            } 
        }else{
            return redirect('/historia')->with('danger', 'Cadastro não localizado!!');
        } 
    }
    public function pesquisaHistoria(){
        $dados = array("tabela" => "Historias");
        return view('pesquisa', compact('dados'));
    }

    public function procuraHistoria(Request $request){
        $nome_hist = $request->input('texto');
        $dados = DB::table('Historias')->select('id', 'nome_hist', 'AnoPublicacao')->where(DB::raw('lower(nome_hist)'), 'like', '%' . strtolower($nome_hist) . '%')->get();
        return view('exibeHistorias', compact('dados'));
    }

  

}








