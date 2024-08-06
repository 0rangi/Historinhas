<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arco;

class ControladorArco extends Controller
{
 
    public function index(){
        return view('mostrarArcos', compact('dados'));
    }

    public function create(){
        return view('criarArcos');
    }

  
    public function store(Request $request){
        $dados = new Arco();
        $dados->descricaoArco = $request->input('descricaoArco');
        $dados->nomeArco = $request->input('nomeArco');
        if($dados->save())
            return redirect('/arco')->with('success', 'Arco cadastrado com sucesso!! :)');
        return redirect('/arco')->with('danger', 'Erro ao cadastrar arco!:(');
    }


    public function show(string $id)
    {
        //
    }

   
    public function edit(string $id){
        $dados = Arco::find($id);
        if(isset($dados))
            return view('editarArco', compact('dados'));
        return redirect('/arco')->with('danger', 'Cadastro do arco não localizado!');
    }

   
    public function update(Request $request, string $id){
        $dados = Arco::find($id);
        if(isset($dados)){
            $dados->nomeArco = $request->input('nomeArco');
            $dados->descricaoArco = $request->input('descricaoArco');
            $dados->save();
            return redirect('/arco')->with('success', 'Cadastro do arco atualizado com sucesso!!');
        }
        return redirect('/arco')->with('danger', 'Cadastro de arco não localizado!');
    }

 
    public function destroy(string $id){
        $dados = Genero::find($id);
        if(isset($dados)){
            $arcos = PersonagemArco::where('id', '=', $id)->first();
            if(!isset($arcos)){
                $dados->delete();
                return redirect('/arco')->with('success', 'Cadastro do arco deletado com sucesso!!');
            }else{
                return redirect('/arco')->with('danger', 'Cadastro não pode ser excluído!!');
            } 
        }else{
            return redirect('/arco')->with('danger', 'Cadastro não localizado!!');
        } 
    }
}
