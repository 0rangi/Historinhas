@extends('layout')
@section('content')


  </head>

  <body>

   
    <main role="main">

      <!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 >Escreva sua história!!</h1>
        </div>
      </div>

      <div class="container">
        <!-- Exemplo de linha de colunas -->
        <div class="row">
          <div class="col-md-3">
            <h2>Cadastrar Gênero</h2>
            <p class="font"> Aqui você pode cadastrar diversos tipos de gêneros para suas histórias, assim você pode organiza-las</p>
            <p class="esse"><a class="btn btn-outline-dark" href="{{route('novogenero')}}" role="button">Criar gênero &raquo;</a></p>
          </div>
          
          <div class="col-md-3">
            <h2> Listar Gêneros</h2>
            <p class="font">Aqui você confere todos os gêneros já existentes</p>
            <p><a class="btn btn-outline-dark" href="{{route('exibegenero')}}" role="button">Conferir gêneros &raquo;</a></p>
          </div>
          <div class="col-md-3">
            <h2> Cadastrar história</h2>
            <p class="font">Aqui você cadastra sua mais nova história, com seus personagens e arcos</p>
            <p><a class="btn btn-outline-dark" href="{{route('novoHistoria')}}" role="button">Criar história &raquo;</a></p>
          </div>
          <div class="col-md-3">
            <h2> Listar Histórias</h2>
            <p class="font">Aqui você confere suas histórias cadastradas e suas especificidades</p>
            <p><a class="btn btn-outline-dark" href="{{route('exibehistoria')}}" role="button">Conferir histórias &raquo;</a></p>
          </div>
        </div>
       

      </div> 

    </main>   
  </body>
</html>