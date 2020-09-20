<?php include "assets/php/verifica_log.php" ?>
<?php include "assets/php/associando_tabelas.php" ?>
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
    <nav class="navbar sticky-top navbar-dark bg-dark"><!--inicio nav bar-->
  		<h3><img src="https://img.icons8.com/color/48/000000/database.png"/>Gerenciamento</h3>
  		<ul>
  			<li class="mr-5">
  				<a href="home.php">
  					<button class="btn"><img src="https://img.icons8.com/color/40/000000/home-page.png"/>Home</button>
  				</a>
  			</li>
  			<li class="mr-5">
  				<a href="crud_Chat.php">
  					<button class="btn"><img src="https://img.icons8.com/color/40/000000/add.png"/>Adicionar</button>
  				</a>
  			</li>
  			
  		</ul>
	</nav><!--fim nav bar -->
	<div>
		<div>
			<h5 class="bg-danger p-2 m-0 text-center">Tabela opções do chat</h5>
		</div>
		<table class="table tb table-hover bordaR">
			<thead class="bg-danger">
				<tr>
					<th>id_chat_opcao</th>
					<th>id_fk_chat_opcao</th>
					<th>descricao</th>
					<th>mensagem</th>
					<th>id_fk_chat_texto</th>
					<th>action</th>
				</tr>
			</thead>
			<tbody class="table-bordered">
				<?php foreach ($linhas_vet0 as $key0) { ?>
					<tr>
						<td><?= $key0['id_chat_opcao']; ?></td>
						<td><?= $key0['id_fk_chat_opcao'];?></td>
						<td><?= $key0['descricao']; ?></td>
						<td><?= $key0['mensagem'];?></td>
						<td><?= $key0['id_fk_chat_texto'];?></td>
						<td class="text-center">
				              <form action="assets/php/remove_Usuario.php" method="post">
				                <!--definido value para escolher pela linha-->
				                <input type="hidden" name="id" value="<?= $user["id"]?>">
				                <button name="remove" class="btn">
				                    <img name="img" src="https://img.icons8.com/color/28/000000/delete.png"/>
				                </button>
				              </form>
						</td>
					</tr>	
				<?php } ?>
			</tbody>
		</table>

		<div>
			<h5 class="bg-primary p-2 m-0 text-center">Tabela texto do chat</h5>
		</div>
		<table class="table tb table-hover bordaB">
			<thead class="bg-primary">
				<tr>
					<th>id_chat_texto</th>
					<th>texto</th>
					<th>action</th>
				</tr>
			</thead>
			<tbody class="table-bordered">
				<?php foreach ($linhas_vet1 as $key1) { ?>
					<tr>
						<td><?= $key1['id_chat_texto']?></td>
						<td><?= $key1['texto'] ?></td>
						<td class="text-center">
							<form action="assets/php/remove_Usuario.php" method="post">
				                <!--definido value para escolher pela linha-->
				             <input type="hidden" name="id" value="<?= $user["id"]?>">
				              <button name="remove" class="btn">
				                  <img name="img" src="https://img.icons8.com/color/28/000000/delete.png"/>
				               </button>
				            </form>
						</td>
					</tr>
				<?php } ?>
			</tbody>
	</div>







    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>