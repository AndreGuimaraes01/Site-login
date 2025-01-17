<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'banco-de-dados-formulario';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);// para se conectar ao banco de dados

    //if($conexao->connect_error){
      //  echo "Erro";
    //}else {                                     //Para testar se esta conectado
      //  echo "Conexão efetuada com sucesso.";
    //}

    

    
?>