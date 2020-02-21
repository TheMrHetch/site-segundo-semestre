<?php
	if($_GET['id']){
		$id = $_GET['id'];
		include "../conn.php";
        mysqli_select_db($cliente, "cinema");
        $sql = "DELETE FROM filme where id =" . $id; 
		mysqli_query($cliente, $sql) ;
	}
	echo ("
	<script>
		window.location='FormularioAllan.html';
		alert('Mensagem excluída com sucesso');
	</script>");
?> 