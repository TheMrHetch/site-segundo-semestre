<?php

	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$nome = $_GET['n'];
		$email = $_GET['em'];
		$evento = $_GET['ev'];
		$local = $_GET['l'];
		$hora = $_GET['h'];
		$qtdp = $_GET['q'];
		
		include "../conn.php";
		mysqli_select_db($cliente, "eventos");
		$sql="delete from evento where id=$id";
		
		mysqli_query($cliente,$sql) or die("NÃo foi possível deletar o dado requerido" . mysqli_error($con));
		
		echo "Registro <b>$id ($nome, $email, $evento, $local, $hora </b>e<b> $qtdp)</b> excluido com sucesso.<hr>";
	}

	echo ("
	<script>
		window.location='listagemEvento.php';
		alert('Exclusão realizada com sucesso');
	</script>");	
?>