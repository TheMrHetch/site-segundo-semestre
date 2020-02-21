<?php

	include "../conn.php";

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$evento = $_POST['evento'];
	$local = $_POST['local'];
	$hora = $_POST['hora'];
	$qtdp = $_POST['qtdp'];
	$createData = "CREATE DATABASE IF NOT EXISTS eventos DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
	$createTable = "CREATE TABLE IF NOT EXISTS evento(
		id int auto_increment primary key,
		nome char(100),
		email char(50),
		evento varchar(2),
		local varchar(2),
		hora varchar(5),
		qtdp int(3)
	)DEFAULT CHARSET utf8";
	
	if ($nome=="") {
		$nome="<u>Não foi enviado nenhum nome.</u>";
	}
	
	if ($email=="") {
		$email="<u>Não foi enviado nenhum email.</u>";
	}
	
	if ($hora=="") {
		$hora="<u>Não foi enviado nenhum hora.</u>";
	}
	
	if ($qtdp=="") {
		$qtdp="<u>Não foi enviado nenhum qtdp.</u>";
	}

	mysqli_query($cliente, $createData) or die("Falha na criação do banco de dados" . mysqli_error($cliente));
	mysqli_select_db($cliente, "eventos") or die ("Falha na seleção do banco de dados " . mysqli_error($cliente));
	mysqli_query($cliente, $createTable) or die("Falha na criação da tabela" . mysqli_error($cliente));

	mysqli_query($cliente, "SET NAMES utf8");
    mysqli_query($cliente, 'SET character_set_connection utf8');
    mysqli_query($cliente, 'SET character_set_client utf8');
    mysqli_query($cliente, 'SET character_set_results utf8');


	$insertRegister="insert into evento (nome,email,evento,local,hora,qtdp)
	values ('$nome','$email','$evento','$local','$hora','$qtdp');";
	
	mysqli_query($cliente, $insertRegister) or die("Falha na inserção de dados." . mysqli_error($cliente));
	
	echo"
	<script>
		window.location='cadastroEvento.html';
		alert('Dados Gravados com sucesso');
	</script>";
?>