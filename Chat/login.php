<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--icone da pag-->
    <link rel="sortcut icon" href="https://www.unifamma.edu.br/wp-content/uploads/2018/02/xfavicon-16x16.png.pagespeed.ic.D2_EEiqeEy.png" type="image/x-icon" />
 
    <meta charset='utf-8'> 
    <title>Chat Unifamma</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-4/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styleResp.css">
</head>

<body class="telaLogin">

  <div class="d-flex justify-content-center">
    <form action="assets/php/autentica_login.php" class="m-5 p-4 formulario" method="post">
      <div class="text-center mt-5">
        <img src="assets/images/tob-home.png" width="25%">
      </div>
      <div>

        <h3 class="text-center font-weight-bold"><span class="red1">Chat Unifamma</span> - <span class="blue1">TOB</span></h3>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1" class="lead">Endereço de email</label>
        <input name="email" type="email" class="form-control" id="botaoEmail" aria-describedby="emailHelp" required="" placeholder="administrador@email.com">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1" class="lead">Senha</label>
        <input name="senha" type="password" class="form-control" id="botaoSenha" placeholder="senha" required="">
      </div>

      <!--erro de usuario ou senha-->
      <?php if(isset($_GET['erro'])) { ?>
        <div class="form-group erro"> 
          <p class=" text-center">usuário ou senha incorretos</p>
        </div>
      <?php } ?>

      <!--erro de tentativa de acesso sem estar logado -->
      <?php if(isset($_GET['erro2'])) { ?>
        <div class="form-group erro"> 
          <p class=" text-center">você deve se autenticar primeiro</p>
        </div>
      <?php } ?>

      <div class="text-center">
        <button type="submit" class="btn btn-primary btn-lg w-50">Entrar</button>
      </div>
         
     
    </form>
  </div>
  
		
	
    
    




	
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>    
</html>