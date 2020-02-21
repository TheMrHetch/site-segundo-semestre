 <?php
    if($_GET['id']){
		$id = $_GET['id'];
        include "../conn.php";
        mysqli_select_db($cliente, "cinema");
        $sql = "SELECT * FROM filme where id = ". $id ;
	
	   $registros = mysqli_query($cliente, $sql) or 
		die("Erro na consulta de cargos:" . mysqli_error($cliente));
	   
        $dados = mysqli_fetch_array($registros);
        
 ?>
 <html> <!-- arquivo cadFunc.html -->
	<head>
		<title>alterar de Cargos</title>
	</head>
	<body>
				<h2>CADASTRO PARA FILME</h2>
			<form action="atualizar.php" method="post" enctype="multipart/form-data">
			<fieldset>
                <p>
				    <input type="hidden" id="id" name="id"  value="<?=$dados['id'];?>" required>
                </p>
                <p>
                    <label for="titulo">Titulo</label>
				    <input type="text" id="titulo" name="titulo" maxlength="130" placeholder="Digite o titulo" size="100px" value="<?=$dados['titulo'];?>" required>
                </p>
                <p>
                <label for="genero">Genero</label>
				<input type="text" name="genero"
				maxlength="20 " id="genero" placeholder="Genero" size="30" value="<?=$dados['genero'];?>" required>
                
            </p>
           <label for="produtora">Produtora:</label>
				<input type="text" name="produtora" maxlength="70" id="produtora" size="30" value="<?=$dados['produtora'];?>">
                <hr>
                     <p>  
                    <label for="data_lancamento">Data de lançamento</label>
                    <input type="date" name="data_lancamento"
                    maxlength="15" id="data_lancamento" placeholder="Data de lançamento" value="<?=$dados['data_lancamento'];?>" required>
                </p>
                <p>
                    <label for="nacionalidade">Nacionalidade</label>
                    <input type="text" name="Nacionalidade"
                     maxlength="50" id="nacionalidade" placeholder="Nacionalidade"
                     size="30" value="<?=$dados['nacionalidade'];?>" required>
                    </p>
            <p>	
                <label for="sinopse">sinopse</label>
                <textarea name="sinopse"  id="sinopse" id="sinopse" cols="30" rows="10" maxlength="300"><?=$dados['sinopse'];?></textarea>
			    
            </p>
            <p>
				<label for="cartaz">Cartaz do Filme</label>
				<input type="file" id="cartaz" name="cartaz" value="<?=$dados['cartaz'];?>">
			</p>

			</fieldset>
			<br>
				<input type="submit" name="enviar" value="Enviar" >
				<input type="reset" name="limpar" value="Limpar">
			</form>

	</body>
<?php }?>
</html>