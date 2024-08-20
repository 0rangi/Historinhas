@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">CADASTRE UM NOVO PERSONAGEM PRA ESSE HISTORIA</h1>
                <h6 class="text-center">{{$dados->nomeHist}}</h6>
            </div>
        </div>
        <form action="{{route('#')}}" method="POST">
            @csrf
            <input type="hidden" id="historia_id" name="historia_id" value={{$dados->historia_id}}>
            <div class="form-group">
                <label for="personagem">Personagem</label><br />
                <select name="personagem">
                        @foreach ($dados as $item)
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