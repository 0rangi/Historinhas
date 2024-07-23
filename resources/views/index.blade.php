<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home</title>
    @vite(['resources/js/app.js'])
    <!-- Principal CSS do Bootstrap -->


    <!-- Estilos customizados para esse template -->
   
   
  </head>

  <body>

   
    <main role="main">

      <!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Escreva sua história!!</h1>
          <p><a class="btn btn-outline-dark" href="cadastro/form-Con.php" role="button">Cadastrar Convidados &raquo;</a></p>
        </div>
      </div>

      <div class="container">
        <!-- Exemplo de linha de colunas -->
        <div class="row">
          <div class="col-md-3">
            <h2>Cadastrar Gênero</h2>
            <p class="font"> Aqui você pode cadastrar diversos tipos de gêneros para suas histórias, assim você pode organiza-las</p>
            <p class="esse"><a class="btn btn-outline-dark" href="cadastro/exibir.php" role="button">Ver lista &raquo;</a></p>
          </div>
          
          <div class="col-md-3">
            <h2> Listar Gêneros</h2>
            <p class="font">Aqui você confere todos os gêneros já existentes</p>
            <p><a class="btn btn-outline-dark" href="#" role="button">Gêneros &raquo;</a></p>
          </div>
          <div class="col-md-3">
            <h2> Cadastrar história</h2>
            <p class="font">Aqui você cadastra sua mais nova história, com seus personagens e arcos</p>
            <p><a class="btn btn-outline-dark" href="#" role="button">Ver detalhes &raquo;</a></p>
          </div>
          <div class="col-md-3">
            <h2> Listar Histórias</h2>
            <p class="font">Aqui você confere suas histórias cadastradas e suas especificidades</p>
            <p><a class="btn btn-outline-dark" href="#" role="button">Ver detalhes &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>


    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->

   
  </body>
</html>