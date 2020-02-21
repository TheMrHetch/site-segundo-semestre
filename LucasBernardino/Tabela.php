<?php
include "../conn.php";
mysqli_select_db($cliente, "ingressos");
$insert = "SELECT * FROM NovoIngresso" ;
$reg = mysqli_query($cliente, $insert) or die("Erro na consulta de cargos:" . mysqli_error($cliente));
$linhas=mysqli_num_rows($reg)  or 	die("Erro na contagem de linhas:" . mysqli_error($cliente));

if ($linhas<1) die("Tabela de compras vazia"); 
	
	echo "<h2>Histórico de Compras:</h2>";
	echo "<table border='1'>";
	echo "	<tr>";
	echo "	<th>ID</th>";
	echo "	<th>Valor</th>";
	echo "	<th>Opção de Linguagem</th>";
	echo "	<th>Quantidade</th>";
	echo "	<th>Pagamento</th>";
	echo "	<th>Nome</th>";
	echo "	<th>CPF</th>";
	echo "	<th>Cartão</th>";
	echo "	<th>Codigo de segurança</th>";
	echo "	<th>Validade</th>";
	echo "	<th>Telefone</th>";
	echo "	<th>Celular</th>";
	echo "	<th>Data de Nascimento:</th>";
	echo "	<th colspan='2'>Ações</th>";
	echo "	</tr>";

	while($dados = mysqli_fetch_array($reg)){
		
		$ingresso = $dados['ID'];
		$tipoIngresso  = $dados['Valor'];
		$lingua = $dados['OpLinguagem'];
		$quantidade  = $dados['Quantidade'];
		$pagamento= $dados['Pagamento'];
		$nome = $dados['Nome'];
		$cpf = $dados['Cpf'];
		$cartao = $dados['Cartao'];
		$codigo = $dados['CodSeg'];
		$validade = $dados['Validade'];
		$tel = $dados['Telefone'];
		$cel = $dados['Celular'];
		$nascimento =  $dados['dataDeNascimento'];
		echo "<tr>";
		echo "<td>" . $ingresso . 	"</td>";
		echo "<td>" . $tipoIngresso.  "</td>";
		echo "<td>" . $lingua .		 "</td>";
		echo "<td>" . $quantidade .  "</td>";
		echo "<td>" . $pagamento .  "</td>";
		echo "<td>" . $nome .  "</td>"; 
		echo "<td>" . $cpf .  "</td>";
		echo "<td>" . $cartao .  "</td>";
		echo "<td>" . $codigo .  "</td>";
		echo "<td>" . $validade .  "</td>";
		echo "<td>" . $tel .  "</td>";
		echo "<td>" . $cel .  "</td>";
		echo "<td>" . $nascimento .  "</td>";
		echo "<td>Alterar</td>";
		echo "<td> <a href='exCompras?c=$ingresso'>Excluir</a></td>";
		echo "</tr>";
		
	}
	
	echo "</table>";
?>
<hr>Clique <a href="../index.html">aqui</a> para retornar.