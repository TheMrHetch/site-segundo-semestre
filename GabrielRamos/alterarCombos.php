<?php

    include "../conn.php";
    mysqli_select_db($cliente, "combopipoca");

    $alterar = $_GET['ediCod'];

    echo ("Preparando para editar o <b>$alterar</b><br>");
    echo "Digite o valor a seguir para ser editado: <br>";

    if (isset($_POST['editado'])) {
        $editar = $_POST['editado'];
        $update = "UPDATE combos SET nome = '$editar' WHERE id = '$alterar'";

        mysqli_query( $cliente, $update ) or die ("Erro na alteração do nome" . mysqli_error($cliente));
    }

    else {
    }

    echo ('
        <script language="javascript">
            var pegaValor = function() {
                var edicao = document.getElementById("ediCao").value;
                alert("Valor editado com sucesso");
            }
        </script>
        <form method="post">
            <input type="text" id="ediCao" maxlength="90" size="50" name="editado">
            <button onclick="pegaValor()">Modificar</button>
        </form>
    ');
?>
<hr>
<a href="listagem.php">Clique aqui</a> para voltar a página de listagem