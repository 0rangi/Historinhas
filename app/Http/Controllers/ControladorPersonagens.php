<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personagem;
use App\Models\Arco;

class ControladorPersonagens extends Controller
{
 
    public function index(){
        $dados = Personagem::all();
        return view('mostrarpersonagem', compact('dados'));
    }

   
    public function create(){
        return view('criarpersonagem');
    }

    public function store(Request $request){
        $dados = new Personagem();
        $dados->nomePersonagem = $request->input('nomePersonagem');
        $dados->descricaoPersonagem = $request->input('descricaoPersonagem');
        $dados->idade = $request->input('idade');
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
            return view('editarPersonagem', compact('dados'));
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
            $personagems = Arco::where('personagem_id', '=', $id)->first();
            if(!isset($personagems)){
                $dados->delete();
                return redirect('/personagem')->with('success', 'Cadastro do personagem deletado com sucesso!!');
            }else{
                return redirect('/personagem')->with('danger', 'Cadastro não pode ser excluído!!');
            } 
        }else{
            return redirect('/personagem')->with('danger', 'Cadastro não localizado!!');
        } 
    }
}
