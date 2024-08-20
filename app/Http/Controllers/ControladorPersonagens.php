<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personagem;
use App\Models\Arco;
use App\Models\Historia;

class ControladorPersonagens extends Controller
{
 
    public function index(){
        $dados = Personagem::all();
        return view('mostrarpersonagem', compact('dados'));
    }

   
    public function create(){
        $historia = Historia::all();
        return view('criarpersonagem', compact('historia'));
    }

    public function store(Request $request){
        $dados = new Personagem();
        $dados->nomePersonagem = $request->input('nomePersonagem');
        $dados->descricaoPersonagem = $request->input('descricaoPersonagem');
        $dados->idade = $request->input('idade');
        $dados->histId = $request->input('historia');
        if($dados->save())
            return redirect('/personagem')->with('success', 'Personagem cadastrado com sucesso!! :)');
        return redirect('/personagem')->with('danger', 'Erro ao cadastrar personagem!:(');
    }


    public function show(string $id){
        //
    }

    public function edit(string $id){
        $dados = Personagem::find($id);
        if(isset($dados))
            return view('editarpersonagem', compact('dados'));
        return redirect('/personagem')->with('danger', 'Cadastro do personagem não localizado!');
    }

    public function update(Request $request, string $id)
    {
        $dados = Personagem::find($id);
        if(isset($dados)){
            $dados->nomePersonagem = $request->input('nomePersonagem');
            $dados->descricaoPersonagem = $request->input('descricaoPersonagem');
            $dados->idade = $request->input('idade');
            $dados->save();
            return redirect('/personagem')->with('success', 'Cadastro do personagem atualizado com sucesso!!');
        }
        return redirect('/personagem')->with('danger', 'Cadastro de personagem não localizado!');
    }


    public function destroy(string $id){
        $dados = Personagem::find($id);
        if(isset($dados)){
            
                $dados->delete();
                return redirect('/personagem')->with('success', 'Cadastro do personagem deletado com sucesso!!');
            
        }else{
            return redirect('/personagem')->with('danger', 'Cadastro não localizado!!');
        } 
    }
    public function novoHistoria($id){
        $dados = DB::table('historia')->orderBy('nomeHist')->get();
        if(isset($dados)){
            $historia = novoHistoria::find($id);
            $dados->nomePersonagem = $historia->nomePersonagem;
            $dados->id = $id;
            return view('criarhistoria', compact('dados'));
        }
        return redirect('/historia')->with('danger', 'Não há histórias cadastradas!!');
    }
  
}
