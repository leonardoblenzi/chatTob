<?php
	//iniciando sessão
	session_start();
	define('HOSTNAME', 'localhost');
	define('USERNAME', 'root');
	define('PASSWORD', null);
	define('DATABASE', 'chatunifamma');

	//conectando
	//if not empty $_POST
	if(!empty($_POST)){
		//estabelecer coneccão com o banco de dados
		$connect = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die("Erro ao conectar");
		$tabela = mysqli_select_db($connect, 'usuarios');

		$email = mysqli_real_escape_string($connect, $_POST['email']);
		$senha = mysqli_real_escape_string($connect, $_POST['senha']);

		//verificar o utilizador em questão(tenteando obter uma unica linha de registro)
		$login = mysqli_query($connect, "SELECT id, email FROM usuarios WHERE email = '$email' AND 
			senha = '$senha' ");

		/*se o login selecionar um registro que confere com email e senha informados
		o usuário será autenticado*/
		if ($login && mysqli_num_rows($login) == 1) {
			header('Location: http://localhost/Chat%20TOB/Chat/home.php');
			$_SESSION['autenticado'] = true;
		}
		else{
			header('Location: http://localhost/Chat%20TOB/Chat/login.php?erro');
		}
	
}	

	
?>
