<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historia;
use App\Models\Genero;

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
        $genero = Genero::all();
        return view('criarhistoria', compact('genero'));
    }

    public function store(Request $request){
        $dados = new Historia();
        $dados->nomeHist = $request->input('nomeHist');
        $dados->descricaoHist  = $request->input('descricaoHist');
        $dados->autor = $request->input('autor'); 
        $dados->paginas = $request->input('paginas');
        $dados->classificacao = $request->input('classificacao');
        $dados->genId = $request->input('genero');
        
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
            return view('editarhistoria', compact('dados'));
        return redirect('/historia')->with('danger', 'Cadastro do história não localizado!');
    }

    public function update(Request $request, string $id)
    {
        $dados = Historia::find($id);
        if(isset($dados)){
            $dados->nomeHist = $request->input('nomeHist');
            $dados->descricaoHist = $request->input('descricaoHist');
            $dados->autor = $request->input('autor'); 
            $dados->paginas = $request->input('paginas');
            $dados->classificacao = $request->input('classificacao');
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
            
            
                $dados->delete();
                return redirect('/historia')->with('success', 'Cadastro do historia deletado com sucesso!!');
            
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

    public function novoGenero($id){
        $dados = DB::table('genero')->orderBy('nomeGen')->get();
        if(isset($dados)){
            $genero = novoGenero ::find($id);
            $dados->nomeHist = $genero->nomeHist;
            $dados->id = $id;
            return view('criarhist', compact('dados'));
        }
        return redirect('/historia')->with('danger', 'Não há histórias cadastradas!!');
    }
  

}








