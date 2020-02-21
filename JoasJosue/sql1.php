<?php
	include "../conn.php";
	mysqli_select_db($cliente,"registroUsuarios")or die("Erro na seleção do db". mysqli_error($cliente));
	$sql = "SELECT *FROM cadCli";
	
	$registrar = mysqli_query($cliente,$sql) or
		die("Erro na consulta dos dados".
			mysqli_error($cliente));
	
	$nl= mysqli_num_rows($registrar) or
		die("Erro na contagem das linhas".
			mysqli_error($cliente));
	
	if($nl < 1){
		die("Não há registros");
	}
	echo"Lista de cadastro";
	
	echo "<table border=2>";
		echo "<tr>";
			echo"<th>N°</th>";
			echo"<th>Nome</th>";
			echo"<th>Idade</th>";
			echo"<th>CPF</th>";
			echo"<th>RG</th>";
			echo"<th>Sexo</th>";
			echo"<th>Email</th>";
			echo"<th>VIP</th>";
			echo"<th>Estado</th>";
			echo"<th>Usuario</th>";
			echo"<th>Senha</th>";
			echo"<th>FPagamento</th>";
			echo"<th>RecPromo</th>";
			echo"<th colspan='2'>Ações</th>";
		echo "</tr>";
		
		while($dados = mysqli_fetch_array($registrar))
		{
			$n = $dados['id'];
			$nome = $dados['nome'];
			$idade = $dados['idade'];
			$CPF = $dados['cpf'];
			$rg = $dados['rg'];
			$sexo = $dados['sexo'];
			$email = $dados['email'];
			$vip = $dados['vip'];
			$estado = $dados['estado'];
			$usuario = $dados['usuario'];
			$senha = $dados['senha'];
			$Fpag = $dados['pag'];
			$REC = $dados['promo'];
			
			echo "<tr>";
				echo"<td>$n</td>";
				echo"<td>$nome</td>";
				echo"<td>$idade</td>";
				echo"<td>$CPF</td>";
				echo"<td>$rg</td>";
				echo"<td>$sexo</td>";
				echo"<td>$email</td>";
				echo"<td>$vip</td>";
				echo"<td>$estado</td>";
				echo"<td>$usuario</td>";
				echo"<td>$senha</td>";
				echo"<td>$Fpag</td>";
				echo"<td>$REC</td>";
				echo"<td>Alterar</td>";
				echo"<td><a href='exlCad.php?c=$n&n=$nome'>Excluir</a></td>";
			echo"</tr>";
		}
		echo"</table>";
?>
<hr>Clique <a href="../index.html">aqui</a> para retornar.