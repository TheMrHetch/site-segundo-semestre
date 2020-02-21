<?php

    include "../conn.php";
    mysqli_select_db($cliente, "combopipoca");

    $remover = $_GET['remCod'];

    $requisicaoRemover = "DELETE FROM `combos` WHERE id = '$remover'";

    echo ("Preparando para remover ID = <b>" . $remover . "</b>");

    mysqli_query ( $cliente, $requisicaoRemover ) or die ( "Erro ao remover a tupla: " . mysqli_error ( $cliente ) );
    echo ("
    <script>
        window.location='combos.html';
        alert('Mensagem excluída com sucesso');
    </script>");


?>
<hr>
<a href="listagem.php">Clique aqui</a> para voltar a página de listagem