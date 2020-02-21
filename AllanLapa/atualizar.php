<?php
    $id = $_POST['id'];
	$titulo = $_POST['titulo'];
	$genero = $_POST['genero'];
	$produtora = $_POST['produtora'];
	$dataL = ($_POST['data_lancamento']) ;
	$nacionalidade = $_POST['Nacionalidade'];
	$sinopse = $_POST['sinopse'];
	$nomeCartaz = $_FILES['cartaz']['name'];
//echo date('Y/m/d', $dataL);


	if( $nomeCartaz <> ""){
		$tipoCartaz = $_FILES['cartaz']['type'];
		if($tipoCartaz == "image/jpeg" || $tipoCartaz == "image/png"){

			$tamanhoCartaz = $_FILES['cartaz']['size'];
			$nomeTmpCartaz = $_FILES['cartaz']['tmp_name'];
			$statusCartaz = true;
		}else{
			echo "arquivo nao surportada";
			$statusCartaz = false;
		}
	}else{$statusCartaz = false;}


	include "../conn.php";
	mysqli_select_db($cliente, "cinema");

	$sql = "UPDATE filme SET id=$id, titulo = '$titulo', genero = '$genero', produtora = '$produtora', data_lancamento = '$dataL', nacionalidade = '$nacionalidade', sinopse = '$sinopse',	cartaz = '$nomeCartaz' WHERE id = '$id'";

	mysqli_query($cliente, $sql) or die("Erro ao gravar no banco ".mysqli_error($cliente));

	

	if($statusCartaz){
		move_uploaded_file($nomeTmpCartaz, "cartaz/". $nomeCartaz) or die("erro ao mover arquivo. ");
	}
    header("Location:lista.php");		
?>
