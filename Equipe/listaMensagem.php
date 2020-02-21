<?php
	include "../conn.php";
	mysqli_select_db($cliente, "faleConosco");
	$com = "SELECT *FROM mensagem";
	
	$registro = mysqli_query($cliente,$com) or
		die("Erro na exibição dos dados".
			mysqli_error($cliente));
	
	$linhas = mysqli_num_rows($registro)or
		die("Erro na contagem de linhas".
			mysqli_error($cliente));
	
	if($linhas <1){
		die("Não há mensagens");
	}
	echo "<h2>Lista de Mensagens</h2>";
	echo "<table border = 2>";
	echo "<tr>";
	echo "<th>Código</th>";
	echo "<th>Nome</th>";
	echo "<th>Email</th>";
	echo "<th>Mensagem</th>";
	echo "<th colspan='2'>Ações</th>";
	echo "</tr>";
	
	while($dados = mysqli_fetch_array($registro))
	{
		$cod = $dados['id'];
		$nome = $dados['nome'];
		$email = $dados['email'];
		$mensagem = $dados['mensagem'];
		
		echo"<tr>";
		echo"<td>$cod</td>";
		echo"<td>$nome</td>";
		echo"<td>$email</td>";
		echo"<td>$mensagem</td>";
		echo"<td>Alterar</td>";
		echo"<td><a href='faleExcluir?c=$cod&n=$nome'>Excluir</a></td>";
		echo"</tr>";
	}
	echo"</table>";

?>
<a href="faleCon.html">Clique aqui</a> para retornar