@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">CADASTRE UM NOVO GÊNERO</h1>
            </div>
        </div>
        <form action="*" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeGen">Nome:</label>
                <input type="text" class="form-control" name="nomeGen" 
                       placeholder="Informe o nome do gênero">
            </div>
            <hr>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="descricao" class="form-control" name="descricao" 
                       placeholder="Informe a descrição do gênero">
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