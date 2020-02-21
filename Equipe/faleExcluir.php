<?php
	include "../conn.php";
	mysqli_select_db($cliente, "faleConosco");
	if(isset($_GET['c']))
	{
		$id = $_GET['c'];
		$nome = $_GET['n'];
		echo"Excluir mensagem de $nome<br>";

		$sql ="DELETE FROM mensagem WHERE id = $id";
	}
		mysqli_query($cliente, $sql)or die("Erro na exclusão da mensagem de $nome ". mysqli_error($cliente));
		echo ("
		<script>
			window.location='faleCon.html';
			alert('Mensagem excluída com sucesso');
		</script>");
?>