@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">CADASTRE UMA NOVA HISTÓRIA</h1>
            </div>
        </div>
        <form action="{{route('gravahistoria')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeHist">Nome:</label>
                <input type="text" class="form-control" name="nomeHist" 
                       placeholder="Informe o nome da historia">
            </div>
            <hr>
            <div class="form-group">
                <label for="descricaoHist">Descrição:</label>
                <input type="descricao" class="form-control" name="descricaoHist" 
                       placeholder="Informe a descrição do gênero">
            </div>
            <hr>
            <div class="form-group">
                <label for="autor">Autor:</label>
                <input type="autor" class="form-control" name="autor" 
                       placeholder="Informe o autor">
            </div>
            <hr>
            <div class="form-group">
                <label for="paginas">Número de páginas:</label>
                <input type="paginas" class="form-control" name="paginas" 
                       placeholder="Informe o número de páginas">
            </div>
            <hr>
            <div class="form-group">
                <label for="classificacao">classificação:</label>
                <input type="classificacao" class="form-control" name="classificacao" 
                       placeholder="Informe a classificação">
            </div>
        
            <hr>
            
         
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('inicio')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection