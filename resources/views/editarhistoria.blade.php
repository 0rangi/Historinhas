@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">ATUALIZE OS DADOS DA HISTORIA</h1>
            </div>
        </div>
        <form action="/historia/{{$dados->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nomeHist" 
                       value="{{$dados->nomeHist}}">
            </div>
            <div class="form-group">
                <label for="nome">Descrição:</label>
                <input type="text" class="form-control" name="descricaoHist" 
                       value="{{$dados->descricaoHist}}">
            </div>
            <div class="form-group">
                <label for="nome">Numero de paginas:</label>
                <input type="text" class="form-control" name="paginas" 
                       value="{{$dados->paginas}}">
            </div>
            <div class="form-group">
                <label for="nome">Autor:</label>
                <input type="text" class="form-control" name="autor" 
                       value="{{$dados->autor}}">
            </div>
            <div class="form-group">
                <label for="nome">Classificação:</label>
                <input type="text" class="form-control" name="classificacao" 
                       value="{{$dados->classificacao}}">
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('inicio')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection