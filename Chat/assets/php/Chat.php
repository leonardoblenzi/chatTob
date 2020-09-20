<?php

define('HOSTNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', null);
define('DATABASE', 'chatunifamma');


if(isset($_GET["msgChat"])){

    //Conectando no Banco MySQL
    $link = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

    
    //Buscando as Opções de Botão

    //Caso seja start inicializa as mensagens
    if ($_GET["msgChat"] == 'start'){
        $where = ' IS NULL ';
    }else{
        $where = ' = '.$_GET["msgChat"];
    }

    $child = mysqli_query($link, "SELECT * FROM chatopcao A WHERE A.id_fk_chat_opcao ".$where);

    $arrayButtons = array();

    while($record = mysqli_fetch_array($child)){
        $arrayButtons[] = ['id' => $record['id_chat_opcao'], 'descButton' => $record['descricao']];
    }

    //Buscando a Mensagem a ser apresentada
    if ($_GET["msgChat"] == 'start'){
        $mensage = 'Selecione um Tema!';
    }else{
        $owner = mysqli_query($link, "SELECT * FROM chatopcao A WHERE A.id_chat_opcao = ".$_GET["msgChat"]);

        $idChatTexto = mysqli_fetch_array($owner);
    
        if ($idChatTexto['id_fk_chat_texto'] == null){
            $mensage = $idChatTexto['mensagem'];
        }else{
            $text = mysqli_query($link, "SELECT texto FROM chat_texto WHERE id_chat_texto =".$idChatTexto['id_fk_chat_texto']);
            $valorText = mysqli_fetch_array($text);
            $mensage = $valorText['texto'];
        }     
    }   

    //Gerando um Array e Retornando um JSON
    $array = ['buttons' => $arrayButtons, 'mensage' => $mensage]; 
    
    echo json_encode($array);
}

?>