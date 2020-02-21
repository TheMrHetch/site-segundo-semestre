<?php

		$id = $_POST['id'];
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$evento = $_POST['evento'];
		$local = $_POST['local'];
		$hora = $_POST['hora'];
		$qtdp = $_POST['qtdp'];
		
		echo "Registro <b>$id ($nome, $email, $evento, $local, $hora </b>e<b> $qtdp)</b> será alterado...<hr>";
		
		include "../conn.php";
		mysqli_select_db($cliente, "eventos");
		
		$sql="update evento set nome='$nome',email='$email',evento='$evento',local='$local',hora='$hora',qtdp='$qtdp' where id=$id";
		
		mysqli_query($cliente,$sql) or die("Não foi possível alterar o dado requerido" . mysqli_error($con));
		
		echo "Registro <b>$id ($nome, $email, $evento, $local, $hora </b>e<b> $qtdp)</b> alterado com sucesso.<hr>";

?>
<a href="listagemEvento.php">Clique aqui</a> para visualizar os eventos cadastrados.