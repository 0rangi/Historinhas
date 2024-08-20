<nav class="navbar navbar-expand-md fixed-top navbar-dark" style="background-color: #393F50; color:#ccd7cf">

<div class="collapse navbar-collapse" id="navbarsExampleDefault">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="{{route('inicio')}}">Início</a>
    </li>
    
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Histórias</a>
      <div class="dropdown-menu" aria-labelledby="dropdown01">
        <a class="dropdown-item" href="{{route('novoHistoria')}}">Cadastrar</a>
        <a class="dropdown-item" href="{{route('exibehistoria')}}">Listar</a>
        <a class="dropdown-item" href="">Pesquisar</a>
      </div>
    </li>
    
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Personagens</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="{{route('novoPersonagem')}}">Cadastrar</a>
          <a class="dropdown-item" href="{{route('mostarpersonagem')}}">Listar</a>
          <a class="dropdown-item" href="">Pesquisar</a>
        </div>
      </li>

              
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Arcos</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="{{route('novoArco')}}">Cadastrar</a>
          <a class="dropdown-item" href="{{route('mostrararco')}}">Listar</a>
          <a class="dropdown-item" href="">Pesquisar</a>
        </div>
      </li>
  </ul>
  
</div>
</nav>