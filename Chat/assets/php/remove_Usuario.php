<?php
	session_start();
	define('HOSTNAME', 'localhost');
	define('USERNAME', 'root');
	define('PASSWORD', null);
	define('DATABASE', 'chatunifamma');

	if(isset($_POST['remove'])){
		$connect = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die("Erro ao conectar");
		$tabela = mysqli_select_db($connect, 'usuarios');


		$id = $_POST['id'];
		$sql = "DELETE FROM usuarios WHERE id = '$id'";


		if(mysqli_query($connect, $sql)){
			header('Location: http://localhost/Chat%20TOB/Chat/tabela_Acesso.php?success');;
		}
		else{
			echo "Erro: " . $sql . mysqli_error($connect);
		}


	}


?>