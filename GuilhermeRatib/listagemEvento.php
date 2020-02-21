<?php

	include "../conn.php";
	mysqli_select_db($cliente, "eventos");
	
	$sql = "select * from evento";
	
	$table = mysqli_query($cliente,$sql) or die("Erro na consulta dos eventos." . mysqli_error($cliente));
	
	$rows = mysqli_num_rows($table) or die("Não foi possível contar o número de linhas do banco de dados." . mysqli_error($cliente) . "<br><br>Para voltar a página de cadastro, <a href='cadastroEvento.html'>Clique aqui.</a>");
	
	echo "<h2>Listagem de Cargos</h2>";
	
	echo "<table border='1'>";
	echo "	<tr>";
	echo "		<th>ID</th>";
	echo "		<th>Nome</th>";
	echo "		<th>Email</th>";
	echo "		<th>Evento</th>";
	echo "		<th>Local</th>";
	echo "		<th>Hora</th>";
	echo "		<th>Quantidade de Pessoas</th>";
	echo "		<th colspan='2'>Açõees</th>";
	echo "	</tr>";
	
	while ($dados = mysqli_fetch_array($table))
	{
		$id = $dados['id'];
		$nome = $dados['nome'];
		$email = $dados['email'];
		$evento = $dados['evento'];
		$local = $dados['local'];
		$hora = $dados['hora'];
		$qtdp = $dados['qtdp'];

		echo "<tr>";
			echo "<td>$id</td>";
			echo "<td>$nome</td>";
			echo "<td>$email</td>";
			echo "<td>$evento</td>";
			echo "<td>$local</td>";
			echo "<td>$hora</td>";
			echo "<td>$qtdp</td>";
			echo "<td><a href='altEvento.php?id=$id&n=$nome&em=$email&ev=$evento&l=$local&h=$hora&q=$qtdp'>Alterar</a></td>";
			echo "<td><a href='excEvento.php?id=$id&n=$nome&em=$email&ev=$evento&l=$local&h=$hora&q=$qtdp'>Excluir</a></td>";
		echo "</tr>";
	}
	echo "</table>";
	
	echo "<br><br>Para voltar a página de cadastro, <a href='cadastroEvento.html'>Clique aqui.</a>";
	
?>