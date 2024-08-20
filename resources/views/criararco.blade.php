@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">CADASTRE UM NOVO ARCO</h1>
            </div>
        </div>
        <form action="{{route('gravaarco')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeArco">Nome:</label>
                <input type="text" class="form-control" name="nomeArco" 
                       placeholder="Informe o nome do arco">
            </div>
            <hr>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="descricaoArco" class="form-control" name="descricaoArco" 
                       placeholder="Informe a descrição do arco">
            </div>
            <hr>
            <div class="form-group">
                <label for="personagem">Selecione o personagem do arco</label>
                <select class="form-control" name="personagem" id="personagem" required>
                    @foreach ($personagem as $item)
                        <option value="{{$item->id}}">{{$item->nomePersonagem}}</option>
                    @endforeach
                </select>
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