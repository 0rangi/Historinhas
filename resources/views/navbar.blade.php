
<nav class="navbar navbar-expand-md fixed-top navbar-dark" style="background-color: #393F50; color:#ccd7cf">


    <div id="user">
      
    </div>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('inicio')}}">Início</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{route('novoHistoria')}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Histórias</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="">Cadastrar</a>
            <a class="dropdown-item" href="">Listar</a>
            <a class="dropdown-item" href="">Pesquisar</a>
          </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{route('novoPersonagem')}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Personagens</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="">Cadastrar</a>
              <a class="dropdown-item" href="">Listar</a>
              <a class="dropdown-item" href="">Pesquisar</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{route('novoArco')}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Arcos</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="">Cadastrar</a>
              <a class="dropdown-item" href="">Listar</a>
              <a class="dropdown-item" href="">Pesquisar</a>
            </div>
          </li>
          
      </ul>
      
    </div>
  </nav>