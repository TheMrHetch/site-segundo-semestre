<?php

    include "../conn.php";

    mysqli_select_db($cliente, "combopipoca");

    $selectAll = "SELECT * FROM `combos`";

    $tuplas = mysqli_query($cliente, $selectAll) or die ("Erro na requisição: " . mysqli_error($cliente));

    $linhas = mysqli_num_rows($tuplas) or die ("Erro na contagem de linhas: " . mysqli_error($cliente));

    if ($linhas < 1) {
        echo ("Não há linhas :(");
    }

    else {
        echo ( "<h2>Listagem dos dados</h2>" );
        echo ( "<table border='1'>" );
            echo ( "<tr>" );
                echo ( "<th>C&oacute;digo</th>" );
                echo ( "<th>Nome</th>" );
                echo ( "<th>Pre&ccedil;o</th>" );
                echo ( "<th>Quantidade</th>" );
                echo ( "<th colspan='2'>A&ccedil;&otilde;es</th>" );
            echo ( "</tr>" );

        while ( $dados = mysqli_fetch_array ( $tuplas ) ) {
            $codigo = $dados['id'];
            $nome = $dados['nome'];
            $preco = $dados['preco'];
            $qtd = $dados['quantidade'];

            echo ( "<tr>" );
                echo ( "<td>$codigo</td>" );
                echo ( "<td>$nome</td>" );
                echo ( "<td>$preco</td>" );
                echo ( "<td>$qtd</td>" );
                echo ( "<td> <a href='alterarCombos.php?ediCod=$codigo'> Editar o <b>nome</b> </a> </td>" );
                echo ( "<td> <a href='excluirCombos.php?remCod=$codigo'> Remover </a> </td>" );
            echo ( "</tr>" );

        }
        echo ( "</table>" );
    }
    echo ( "<hr>" );
?>
<a href="combos.html">Clique aqui </a> para selecionar mais combos