<?php
	//uma session expira automaticamente em cerca de 3 horas
	/*se usuario se desconectar a sessão será encerrada e ele não poderá acessar
	páginas restritas, somente entrando com email e senha novamente */
	session_start();
	if(isset($_POST['sair'])){
		session_destroy();
		header('Location: http://localhost/Chat%20TOB/Chat/login.php');
	}

?>