<?php
	$nome= $_POST['nome'];
	$idade= $_POST['idade'];
	$cpf=$_POST['cpf'];
	$rg=$_POST['RG'];
	$sexo=$_POST['sexo'];
	$email=$_POST['email'];
	$usuario=$_POST['usuario'];
	$senha=$_POST['senha'];
	$confSenha=$_POST['confSenha'];
	$vip = $_POST['vip'];
	$pag = $_POST['pag'];
	$estado = $_POST['estados'];

	
	if(isset($_POST['promo']))
		$rec = $_POST['promo'] ;
	else
		$rec = 0;
	
	include "../conn.php";
	
	$createData = "CREATE DATABASE IF NOT EXISTS registroUsuarios DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
	$createTable = "CREATE TABLE IF NOT EXISTS cadCli ( 
		`id` int(11) PRIMARY KEY AUTO_INCREMENT,
		`nome` varchar(50) DEFAULT NULL,
		`idade` tinyint(2) DEFAULT NULL,
		`cpf` bigint(11) DEFAULT NULL,
		`rg` int(9) DEFAULT NULL,
		`sexo` varchar(1) DEFAULT NULL,
		`email` varchar(50) DEFAULT NULL,
		`vip` tinyint(1) DEFAULT NULL,
		`estado` varchar(2) DEFAULT NULL,
		`usuario` varchar(20) DEFAULT NULL,
		`senha` varchar(20) DEFAULT NULL,
		`pag` varchar(2) DEFAULT NULL,
		`promo` tinyint(1) DEFAULT NULL
		) DEFAULT CHARSET utf8";
	$insertRegister = "INSERT INTO cadCli (nome, idade, cpf, rg, sexo, email, vip, estado, usuario, senha, pag, promo) VALUES ('$nome', '$idade', '$cpf', '$rg', '$sexo', '$email', '$vip', '$estado', '$usuario', '$senha', '$pag', '$rec')";

	mysqli_query($cliente, $createData) or die ("Erro na criação do banco de dados " . mysqli_error($cliente));

	mysqli_select_db($cliente, "registroUsuarios") or die ("Banco não encontrado " . mysqli_error($cliente));
					
	mysqli_query($cliente, $createTable) or die ("Erro na criação da tabela " . mysqli_error($cliente));

	mysqli_query($cliente, "SET NAMES utf8");
    mysqli_query($cliente, 'SET character_set_connection utf8');
    mysqli_query($cliente, 'SET character_set_client utf8');
	mysqli_query($cliente, 'SET character_set_results utf8');
	
	mysqli_query($cliente, $insertRegister) or die("Falha na gravação dos dados " . mysqli_error($cliente));
			
	echo ("
	<script>
		window.location='formulario.html';
		alert('Cadastro realizado com sucesso');
	</script>");						
?>