<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arco;
use App\Models\Personagem;


class ControladorArco extends Controller
{
 
    public function index(){
        $dados = Arco::with('personagem')->get();
        return view('mostrararco', compact('dados'));
    }

    public function create(){
        $personagem = Personagem::all();
        return view('criararco',compact('personagem'));

    }

  
    public function store(Request $request){
        $dados = new Arco();
        $dados->personagem_id = $request->input('personagem');
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
        $personagem = Personagem::all();
            return view('editararco', compact('dados', 'personagem'));
        return redirect('/arco')->with('danger', 'Cadastro do arco não localizado!');
    }

   
    public function update(Request $request, string $id){
        $dados = Arco::find($id);
        if(isset($dados)){
            $dados->personagem_id = $request->input('personagem');
            $dados->nomeArco = $request->input('nomeArco');
            $dados->descricaoArco = $request->input('descricaoArco');
            $dados->save();
            return redirect('/arco')->with('success', 'Cadastro do arco atualizado com sucesso!!');
        }
        return redirect('/arco')->with('danger', 'Cadastro de arco não localizado!');
    }

 
    public function destroy(string $id){
        $dados = Arco::find($id);
        if(isset($dados)){
            
                $dados->delete();
                return redirect('/arco')->with('success', 'Cadastro do arco deletado com sucesso!!');
            
        }else{
            return redirect('/arco')->with('danger', 'Cadastro não localizado!!');
        } 
    }

        public function novoPersonagem($id){
            $dados = DB::table('personagem')->orderBy('nomePersonagem')->get();
            if(isset($dados)){
                $arcos = Arco ::find($id);
                $dados->nomeHist = $arcos->nomeHist;
                $dados->id = $id;
                return view('criarpersonagem', compact('dados'));
            }
            return redirect('/arco')->with('danger', 'Não há arcos cadastrados!!');
        }
    
}
