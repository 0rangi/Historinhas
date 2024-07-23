<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-danger">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Lista de convidados<span class="sr-only">(atual)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
      
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Pesquisa" aria-label="Search">
          <button type="button" class="btn btn-light">Light</button>
        </form>
      </div>
    </nav>

    <main role="main">

      <!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Organize seu evento</h1>
          <p><a class="btn btn-outline-danger" href="cadastro/form-Con.php" role="button">Cadastrar Convidados &raquo;</a></p>
        </div>
      </div>

      <div class="container">
        <!-- Exemplo de linha de colunas -->
        <div class="row">
          <div class="col-md-3">
            <h2>Verificar dados</h2>
            <p> Aqui você tem um balanço de quantidades</p>
            <p class="esse"><a class="btn btn-outline-danger" href="cadastro/exibir.php" role="button">Ver lista &raquo;</a></p>
          </div>
          
          <div class="col-md-3">
            <h2>Lista</h2>
            <p>Aqui você confere seus convidados confirmados</p>
            <p><a class="btn btn-outline-danger" href="#" role="button">Ver detalhes &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy;         
        <a href="https://www.instagram.com/gabrielaa.vilelaa">

        </a>
      </p>
    </footer>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->

    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>