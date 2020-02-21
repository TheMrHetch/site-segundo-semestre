<?php
    $nomeUsuario = $_POST["nome"];
    $emailUsuario = $_POST["email"];
    $msgUsuario = $_POST["msg"];

    include "../conn.php";

    $createData = "CREATE DATABASE IF NOT EXISTS faleConosco DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
    $createTable = "CREATE TABLE IF NOT EXISTS mensagem (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(50),
            email VARCHAR(70),
            mensagem text
        ) DEFAULT CHARSET utf8";
    $insertRegister = "INSERT INTO mensagem (nome, email, mensagem) VALUES ('$nomeUsuario', '$emailUsuario', '$msgUsuario')";
    $erro = mysqli_error($cliente);

    mysqli_query($cliente, $createData) or die ("Erro na criação do banco: $erro");
    
    mysqli_select_db($cliente, "faleConosco");
    
    mysqli_query($cliente, $createTable) or die ("Erro na criação da tabela $erro");

    mysqli_query($cliente, "SET NAMES utf8");
    mysqli_query($cliente, 'SET character_set_connection utf8');
    mysqli_query($cliente, 'SET character_set_client utf8');
    mysqli_query($cliente, 'SET character_set_results utf8');

    mysqli_query($cliente, $insertRegister) or die ("Erro na inserção de dados à tabela $erro");

    echo"<script>window.location='faleCon.html';
        alert('Dados Gravados com sucesso');
    </script>";
?>