<?php
if (isset($_GET['c']))
{
	$ingresso = $_GET['c'];
	echo "Compra de número <b>" . $ingresso . " excluida</b> com sucesso.<br>";
	$delete="delete from NovoIngresso WHERE ID=$ingresso";
	include  "../conn.php";
	mysqli_select_db($cliente, "ingressos");
	mysqli_query($cliente, $delete) or die("Erro na exclusão do registro $ingresso");
}
?>
<br>
<hr>Clique <a href="Tabela.php">aqui</a> para retornar ao histórico de compras.