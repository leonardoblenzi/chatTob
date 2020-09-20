<?php
	include "autentica_login.php";
	//verifica se $_SESSION['autenticado'] é falso, se for vai voltar para login e exibir erro
	if(!$_SESSION['autenticado']){
		header('Location: http://localhost/Chat%20TOB/Chat/login.php?erro2');
	}
	
?>