<?php include "assets/php/verifica_log.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!--icone da pag-->
    <link rel="sortcut icon" href="https://www.unifamma.edu.br/wp-content/uploads/2018/02/xfavicon-16x16.png.pagespeed.ic.D2_EEiqeEy.png" type="image/x-icon" />
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styleResp.css">
    <title>Gerenciamento Chat</title>
  </head>
  <body class="bg">
    <nav class="navbar sticky-top navbar-dark bg-dark">
  		<h3><img src="https://img.icons8.com/color/48/000000/database.png"/>Gerenciamento</h3>
  		<ul>
  			<li class="mr-5">
  				<a href="home.php">
  					<button class="btn"><img src="https://img.icons8.com/color/40/000000/home-page.png"/>Home</button>
  				</a>
  			</li>
  			<li class="mr-5">
  				<a href="add_Acesso.php">
  					<button class="btn"><img src="https://img.icons8.com/color/40/000000/add.png"/>Adicionar</button>
  				</a>
  			</li>
  			
  		</ul>
	</nav>
  <!----------------tabela 1---------------->
  <div>
      <h5 class="bg-danger p-3 m-0 text-center">Tabela opções do chat</h5>
  </div>
  <form class="form-acesso" action="" method="post">
    <div class="form-group mt-2">
      <p class="m-3">id_chat_opcao</p>
      <input class="form-control" type="text" name="email" required="">
      <p class="m-3">fk_chat_opcao</p>
      <input class="form-control" type="text" name="senha" required="">
      <p class="m-3">descrição</p>
      <input class="form-control" type="text" name="descricao" required="">
      <p class="m-3">mensagem</p>
      <input class="form-control" type="text" name="mensagem" required=""> 
      <p class="m-3">id_fk_chat_texto</p>
      <input class="form-control" type="text" name="id_fk_chat_texto" required="">
    </div>
    
  </form>
    <div class="text-center mt-5">
      <button class="btn btn-lg btn-success">Confimar</button>
    </div>

    <!---------------tabela 2--------------->
  <div class="mt-5">
      <h5 class="bg-primary p-3 m-0 text-center">Tabela texto do chat</h5>
  </div>

  <form class="form-acesso" action="" method="post">
    <div class="form-group mt-2">
      <p class="m-3">id_chat_texto</p>
      <input class="form-control" type="text" name="id_chat_texto" required="">
      <p class="m-3">texto</p>
      <input class="form-control" type="text" name="texto" required="">
    </div>
    
  </form>

    <div class="text-center mt-5 mb-5">
      <button class="btn btn-lg btn-success">Confimar</button>
    </div>
  </div>





    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>