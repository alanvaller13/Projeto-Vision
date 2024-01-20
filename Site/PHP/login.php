<?php

require 'PHP/conectionBD.php';

session_start();

        $username = $_POST['Usuario'];
        $password = $_POST['Senha'];

        $select = "SELECT Usuario, Senha FROM Login WHERE Usuario = '$username' AND Senha = '$password';";
        $result = $conn -> query($select);

        $mensagem = "Login Incorreto";

        if($result -> num_rows > 0){
            session_start();
            $_SESSION['username'] = $username;
    
            header('Location: paginaUser.html');
        }else{
            header('Location: login.html');
        };
?>