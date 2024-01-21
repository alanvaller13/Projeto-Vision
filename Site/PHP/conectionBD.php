<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "Vision";

    // Criar conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexão
    if($conn -> connect_error){
        echo 'Conexão Falhou '.$conn -> connect_error;
    }
    else{
        echo "Você está conectado.";
    }
?>
