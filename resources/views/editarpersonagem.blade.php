@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">ATUALIZE OS DADOS DO PERSONAGEM</h1>
            </div>
        </div>
        <form action="/personagem/{{$dados->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nomePersonagem" 
                       value="{{$dados->nomePersonagem}}">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" class="form-control" name="descricaoPersonagem" 
                       value="{{$dados->descricaoPersonagem}}">
            </div>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="text" class="form-control" name="idade" 
                       value="{{$dados->idade}}">
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('inicio')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection