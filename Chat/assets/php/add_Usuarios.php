<?php
	session_start();
	define('HOSTNAME', 'localhost');
	define('USERNAME', 'root');
	define('PASSWORD', null);
	define('DATABASE', 'chatunifamma');


	if(!empty($_POST['email'] && $_POST['senha'])){
		$connect = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die("Erro ao conectar");
		$tabela = mysqli_select_db($connect, 'usuarios');

		$email = mysqli_real_escape_string($connect, $_POST['email']);
		$senha = mysqli_real_escape_string($connect, $_POST['senha']);	
		
		$sql = "INSERT INTO usuarios (email,senha) VALUES ('$email', '$senha')";

		if(mysqli_query($connect, $sql)){
			header('Location: http://localhost/Chat%20TOB/Chat/tabela_Acesso.php?success');
		}
		else{
			echo "Erro: " . $sql . mysqli_error($connect);
		}	
	}



?>