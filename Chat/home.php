<?php include "assets/php/verifica_log.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
  	<!--icone da pag-->
    <link rel="sortcut icon" href="https://www.unifamma.edu.br/wp-content/uploads/2018/02/xfavicon-16x16.png.pagespeed.ic.D2_EEiqeEy.png" type="image/x-icon" />
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/css/styleResp.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap-4/css/bootstrap.min.css">
    <title>Home</title>
  </head>
  <body class="bg">
      <aside class="aside lateral">
        <div class="mt-5">
          <!-- https://flowsjournal.com/JOURNAL/ENDR1/images/profile.png -->
          <img class="w-25 rounded mx-auto d-block" src="assets/images/profile.png">
          	<h4 class="text-center">Admin</h4>
        </div>
        <div class="posicao">
          <form action="assets/php/desconectar.php" method="post">
            <button name="sair" type="submit" class="btn btn-primary btn-md">Desconectar</button>
          </form>
        </div>
      </aside>
   
    <div>
    	<div class="d-flex justify-content-center">
    		<ul class="opcoes">
    			<li class="text-center">
    				<div class="m-5">
    					<a href="tabelas_Chat.php" style="text-decoration: none;">
    						<img src="https://img.icons8.com/color/96/000000/data-configuration.png"/>
	    					<h5>Gerenciar Chat</h5>
    					</a>
    				</div>
    			</li>
    			<li class="text-center">
    				<div class="m-5">
    					<a href="tabela_Acesso.php" style="text-decoration: none;">
    						<img src="https://img.icons8.com/color/96/000000/sql-database-administrators-group.png"/>
	    					<h5>Gerenciar Acesso</h5>
    					</a>
    				</div>
    			</li>
    		</ul>
    	</div>
    </div>
    


















  

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>