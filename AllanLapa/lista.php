<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <main>
       <?php 
	include "../conn.php";
	mysqli_select_db($cliente, "cinema");
	
	$sql = "SELECT * FROM filme" ;
	
	$registros = mysqli_query($cliente, $sql) or 
		die("Erro na consulta de cargos:" . mysqli_error($cliente));
	
	$linhas=mysqli_num_rows($registros) ;
	
	if( ($linhas<1)) {
		echo "<p>Cadastro de cargos está vazio !</p>";
	}else{
?>


	<h2>Listagem de Cargos</h2>
	<table border="1">
		<tr>
			<th>titulo</th>
			<th>genero</th>
            <th>data_lancamento</th>
            <th>sinopse</th>
			<th colspan="2">ações</th>
		<tr>

<?php
	while($dados = mysqli_fetch_array($registros) ){
		$id = $dados['id'];
		$titulo = $dados['titulo'];
		$genero = $dados['genero'];
		$data_lancamento = $dados['data_lancamento'];
		$sinopse = $dados['sinopse'];
?>
		<tr>
			<td><?=$titulo?></td>
			<td><?=$genero?></td>
			<td><?=$data_lancamento?></td>
			<td style="width: 240px"><?=$sinopse?></td>
			<td><a href="altfilme.php?id=<?=$id;?>">alterar</a></td>
			<td><a href="excfilme.php?id=<?=$id;?>">excluir</a></td>
		<tr>
<?php
	} }
?>	  
    <p><a href="FormularioAllan.html">Cadastrar novo</a></p>
	</table>
  </main>  
</body>
</html>