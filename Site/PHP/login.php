<?php

require 'PHP/conectionBD.php';

session_start();

        $username = $_POST['Usuario'];
        $password = $_POST['Senha'];

        $select = "SELECT Usuario, Senha FROM Login WHERE Usuario = ? AND Senha = ?";
        $stmt = $conn->prepare($select);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->store_result()
        $result = $conn -> query($select);

        $mensagem = "Login Incorreto";

        if ($stmt->num_rows > 0) {
            $_SESSION['username'] = $username;
            header('Location: paginaUser.html');
        } else {
            header('Location: paginaLogin.html');
        }
        
        $stmt->close();
        $conn->close();
?>