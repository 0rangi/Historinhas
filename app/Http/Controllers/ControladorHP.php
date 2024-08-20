<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personagens;
use App\Models\Historia;


class ControladorHP extends Controller
{

    
        public function index($id)
        {
            $dados = $this->HP->where('historia_id', $id)->get();
            $historia = Historia::find($id);
            $dados->NomeHist = $historia->NomeHist;
            foreach($dados as $item){
                $personagem = Personagem::find($item->personagem_id);
                $item->nomePersonagem = $personagem->nomePersonagem;
            }
            return view('exibehistoria', compact('dados'));
        }
    
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            //
        }
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            $dados = new HP();
            $dados->personagem_id = $request->input('personagem');
            $dados->historia_id = $request->input('historia_id');
            if($dados->save())
                return redirect('/historia')->with('success', 'Personagem da historia cadastrado com sucesso!!');
            return redirect('/historia')->with('danger', 'Erro ao cadastrar personagem da historia!');
        }
    
        /**
         * Display the specified resource.
         */
        public function show(string $id)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id)
        {
            //
        }
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id)
        {
            $dados = HP::find($id);
            if(isset($dados)){
                $dados->delete();
                return redirect('/historia')->with('success', 'Personagem da historia deletado com sucesso!!');
            }
            return redirect('/historia')->with('danger', 'Erro ao deletar personagem da historia!');
        }
    }