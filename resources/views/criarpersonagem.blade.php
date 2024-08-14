@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">CADASTRE UM NOVO PERSONAGEM</h1>
            </div>
        </div>
        <form action="{{route('gravapersonagem')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomePersonagem">Nome:</label>
                <input type="text" class="form-control" name="nomePersonagem" 
                       placeholder="Informe o nome do personagem">
            </div>
            <hr>
            <div class="form-group">
                <label for="descricaoPersonagem">Descrição:</label>
                <input type="descricao" class="form-control" name="descricaoPersonagem" 
                       placeholder="Informe a descrição do personagem">
            </div>
            <hr>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="idade" class="form-control" name="idade" 
                       placeholder="Informe a idade">
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