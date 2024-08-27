@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">ATUALIZE OS DADOS DO ARCO</h1>
            </div>
        </div>
        <form action="/arco/{{$dados->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nomeArco" 
                       value="{{$dados->nomeArco}}">
            </div>
            <div class="form-group">
                <label for="nome">Descrição:</label>
                <input type="text" class="form-control" name="descricaoArco" 
                       value="{{$dados->descricaoArco}}">
            </div>
            <div class="form-group">
                <label for="personagem_id">Selecione o personagem do historias</label>
                <select class="form-control" name="personagem" id="personagem_id" required>
                    @foreach ($personagem as $item)
                       @if($dados->personagem_id == $item->id)
                            <option selected="selected" value="{{$item->id}}">{{$item->nomePersonagem}}</option>
                        @else
                            <option value="{{$item->id}}">{{$item->nomePersonagem}}</option>
                        @endif
                    @endforeach
                </select>
              </div>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('inicio')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection