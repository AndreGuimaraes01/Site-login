<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'teste123';
    $dbName = 'banco-de-dados-formulario';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);// para se conectar ao banco de dados

    if($conexao->connect_error){
        echo "Erro";
    }else {                                     //Para testar se esta conectado
        echo "Conexão efetuada com sucesso.";
    }

    
?>