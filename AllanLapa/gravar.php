<?php
	$titulo = $_POST['titulo'];
	$genero = $_POST['genero'];
	$produtora = $_POST['produtora'];
	$dataL = ($_POST['data_lancamento']) ;
	$nacionalidade = $_POST['Nacionalidade'];
	$sinopse = $_POST['sinopse'];
	$nomeCartaz = $_FILES['cartaz']['name'];
//echo date('Y/m/d', $dataL);


	if( $nomeCartaz <> ""){
		$tipoCartaz = $_FILES['cartaz']['type'];
		if($tipoCartaz == "image/jpeg" || $tipoCartaz == "image/png"){

			$tamanhoCartaz = $_FILES['cartaz']['size'];
			$nomeTmpCartaz = $_FILES['cartaz']['tmp_name'];
			$statusCartaz = true;
		}else{
			echo "arquivo nao surportada";
			$statusCartaz = false;
		}
	}else{$statusCartaz = false;}
	
	include "../conn.php";

	$createTable = "CREATE TABLE IF NOT EXISTS `filme` (
		`id` int(11) PRIMARY KEY AUTO_INCREMENT,
		`titulo` varchar(130) NOT NULL,
		`genero` varchar(20) NOT NULL,
		`produtora` varchar(60) NOT NULL,
		`data_lancamento` date NOT NULL,
		`nacionalidade` varchar(50) NOT NULL,
		`sinopse` varchar(300) NOT NULL,
		`cartaz` varchar(100) NOT NULL
		)DEFAULT CHARSET utf8";
	$createData = "CREATE DATABASE IF NOT EXISTS cinema DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
	$insertRegister = "INSERT INTO filme (titulo, genero, produtora, data_lancamento, nacionalidade, sinopse,	cartaz) VALUES('$titulo','$genero', '$produtora', '$dataL', '$nacionalidade', '$sinopse', '$nomeCartaz')";

	mysqli_query($cliente, $createData) or die("Erro ao criar o banco ".mysqli_error($cliente));

	mysqli_select_db($cliente, "cinema") or die("Erro ao selecionar o banco".mysqli_error($cliente));

	mysqli_query($cliente, $createData) or die("Erro ao criar o banco ".mysqli_error($cliente));
	mysqli_query($cliente, $createTable) or die ("Erro na criação da tabela " . mysqli_error($cliente));	

	mysqli_query($cliente, "SET NAMES utf8");
    mysqli_query($cliente, 'SET character_set_connection utf8');
    mysqli_query($cliente, 'SET character_set_client utf8');
	mysqli_query($cliente, 'SET character_set_results utf8');

	mysqli_query($cliente, $insertRegister) or die("Falha na gravação dos dados " . mysqli_error($cliente));


	if($statusCartaz){
		move_uploaded_file($nomeTmpCartaz, "cartaz/". $nomeCartaz) or die("erro ao mover arquivo. ");
	}
    echo ("
	<script>
		window.location='FormularioAllan.html';
		alert('Cadastro realizado com sucesso');
	</script>");	
?>
