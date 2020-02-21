<?php
	include "../conn.php";
	mysqli_select_db($cliente,"registroUsuarios")or die("Erro na seleção do db ". mysqli_error($conn));
	if(isset($_GET['c']))
	{
		$id = $_GET['c'];
		$nome = $_GET['n'];
		echo"Vou excluir o n° $id<br>";
		
		$sql = "DELETE FROM cadCli WHERE id=$id";
	}
	mysqli_query($cliente,$sql) or 
		die("Erro na exclusão do registro N° $id" .
			mysqli_error($cliente)
			);
			echo ("
			<script>
				window.location='formulario.html';
				alert('Mensagem excluída com sucesso');
			</script>");
?>