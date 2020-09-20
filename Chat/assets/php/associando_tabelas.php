<?php 
	$connect = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die("Erro ao conectar");
	$tabela = mysqli_select_db($connect, 'chatunifamma');
	$tb1 = mysqli_query($connect, "SELECT * FROM chatopcao");
	$count0 = 0;
	//percorrendo e associando todas linhas da tabela 1 - chatopcao
	while($linha = mysqli_fetch_assoc($tb1)){
		$linhas_vet0[$count0] = $linha;
  		$count0++;
	}

	//percorrendo e associando linhas da tabela 2 - chattexto
	$count1 = 0;
	$tb2 = mysqli_query($connect, "SELECT * FROM chat_texto");
	while($linha1 = mysqli_fetch_assoc($tb2)){
		$linhas_vet1[$count1] = $linha1;
		$count1++;
	}

	//percorrendo e associando linhas da tabela de usuarios
	$count2=0;
	$tb_user = mysqli_query($connect, "SELECT * FROM usuarios");
	while($linha_usr = mysqli_fetch_assoc($tb_user)){
		$linhas_usr1[$count2] = $linha_usr;
		$count2++;
	}
?>