<?php
$ingresso = $_POST['ingresso'];
$lingua = $_POST['lingua'];
$quantidade = $_POST['quantidade'];
$pagamento = $_POST['pagamento'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$cartao = $_POST['cartao'];
$codSeg = $_POST['codigo'];
$validade = $_POST['validade'];
$tel = $_POST['tel'];
$cel = $_POST['cel'];
$nascimento = $_POST['nascimento'];
$nomeFilme = $_POST['ingFilme'];


include "../conn.php";	

$createData = "CREATE DATABASE IF NOT EXISTS ingressos	DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
$createTable = "CREATE TABLE IF NOT EXISTS NovoIngresso (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NomeFilme` VARCHAR(40),
  `Valor` varchar(20) DEFAULT NULL,
  `OpLinguagem` char(9) DEFAULT NULL,
  `Quantidade` tinyint(7) DEFAULT NULL,
  `Pagamento` varchar(7) DEFAULT NULL,
  `Nome` varchar(50),
  `Cpf` varchar(15) DEFAULT NULL,
  `Cartao` varchar(20),
  `CodSeg` int(3) DEFAULT NULL,
  `Validade` varchar(7) DEFAULT NULL,
  `Telefone` varchar(15) DEFAULT NULL,
  `Celular` varchar(15) DEFAULT NULL,
  `dataDeNascimento` DATE DEFAULT NULL,
  PRIMARY KEY (`ID`)
) DEFAULT CHARSET utf8";
$insertRegister = "INSERT INTO NovoIngresso (NomeFilme, Valor , opLinguagem , Quantidade, Pagamento, Nome, CPF, Cartao, CodSeg, Validade , Telefone,Celular, dataDeNascimento)
VALUES (
   '$nomeFilme',
   '$ingresso',
   '$lingua',
   '$quantidade',
   '$pagamento',
   '$nome',
   '$cpf',
   '$cartao',
   '$codSeg',
   '$validade',
   '$tel',
   '$cel',
   '$nascimento'
   )";

mysqli_query($cliente, $createData) or die ("Erro na criação do banco de dados " . mysqli_error($cliente));

mysqli_select_db($cliente, "ingressos") or die ("Erro na seleção do banco de dados " . mysqli_error($cliente));

mysqli_query($cliente, $createTable) or die ("Erro na criação da tabela " . mysqli_error($cliente));

mysqli_query($cliente, "SET NAMES utf8");
mysqli_query($cliente, 'SET character_set_connection utf8');
mysqli_query($cliente, 'SET character_set_client utf8');
mysqli_query($cliente, 'SET character_set_results utf8');

mysqli_query($cliente, $insertRegister) or die ("Erro na alocação dos registros " . mysqli_error($cliente));

echo '
<script>
	window.location="../index.html";
	alert("Compra Realizada com sucesso");
</script>';
?>