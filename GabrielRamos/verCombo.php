<?php
    //FUNÇÃO CRIADA PARA COLOCAR OS PREÇOS EM SEUS RESPECTIVOS PRODUTOS
    function mudancaDeEstado($qt, $preco, $preco1, $preco2) {
        if ($qt === 1 || $qt === 2 || $qt === 3 || $qt == 4) {
            $tot =  $qt * $preco;
        }

        else if ($qt === 5 || $qt === 6 || $qt === 7) {
            $tot =  $qt * $preco1;
        }
        
        else {
            $tot =  $qt * $preco2;
        }
        
        return $tot;
    }


    //FUNÇÃO CRIADA PARA FAZEER A CONEXÃO AO MYSQL E INSERIR OS DADOS NA MESMA;
    function connectionToSql($NOMEDADO, $PRECODADO, $QUANTIDADE) {
        include "../conn.php";
        
        $insertRegister = "INSERT INTO combos (nome, preco, quantidade) VALUES ('$NOMEDADO', '$PRECODADO', '$QUANTIDADE')";
        $createData = "CREATE DATABASE IF NOT EXISTS combopipoca DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
        $createTable = "CREATE TABLE IF NOT EXISTS combos (
            `id` int PRIMARY KEY AUTO_INCREMENT,
            `nome` varchar(90),
            `preco` decimal(5,2),
            `quantidade` int(2)
        )DEFAULT CHARSET utf8";

        mysqli_query($cliente, $createData) or die ("Erro na criação do banco de dados " . mysqli_error($cliente));

        mysqli_select_db($cliente, "combopipoca") or die ("Erro na seleção do banco de dados " . mysqli_error($cliente));

        mysqli_query($cliente, $createTable) or die ("Erro na criação da Tabela " . mysqli_error($cliente));
        mysqli_query ($cliente, $insertRegister) or die ("Erro na alocação de Arquivos " . mysqli_error($cliente));
        
        echo ("
        <script>
            window.location='combos.html';
            alert('Cadastro realizado com sucesso');
        </script>");
    }

    

    echo ("<center><h1>Menu 1:</h1></center>");

    if ( $_POST['combos1'] === "nada1" ) {
        echo ("<center><h1>Você não Escolheu nenhum combo no primeiro menu</h1></center><br>");
    }

    else {
        $lista1 = $_POST['combos1'];
        $qtdCombos1 = $_POST['qtdCombo1'];

        if ($lista1 === "combo1") {
            
            //USO DA FUNÇÃO: mudancaDeEstado();

            $precoTot = mudancaDeEstado($qtdCombos1, 2.50, 2.30, 2.10);

            //---------------------------------

            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            //USO DA FUNÇÃO: connectionToSql();

            connectionToSql($lista1, $precoTot, $qtdCombos1);

            //---------------------------------
        }

        else if ($lista1 === "combo2") {
            $precoTot = mudancaDeEstado($qtdCombos1, 2.70, 2.50, 2.30);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos1);
        }

        else if ($lista1 === "combo3") {
            $precoTot = mudancaDeEstado($qtdCombos1, 5.00, 4.70, 4.50);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos1);
        }

        else if ($lista1 === "combo4") {
            $precoTot = mudancaDeEstado($qtdCombos1, 4.90, 4.60, 4.40);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos1);
        }

        else if ($lista1 === "combo5") {
            $precoTot = mudancaDeEstado($qtdCombos1, 3.10, 2.90, 2.70);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos1);
        }

        else if ($lista1 === "combo6") {
            $precoTot = mudancaDeEstado($qtdCombos1, 5.50, 5.20, 4.90);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos1);
        }

        else if ($lista1 === "combo7") {
            $precoTot = mudancaDeEstado($qtdCombos1, 5.40, 5.10, 4.80);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos1);
        }

        else if ($lista1 === "combo8") {
            $precoTot = mudancaDeEstado($qtdCombos1, 4.90, 4.70, 4.50);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos1);
        }

        else if ($lista1 === "combo9") {
            $precoTot = mudancaDeEstado($qtdCombos1, 4.00, 3.70, 3.40);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos1);
        }

        else if ($lista1 === "combo10") {
            $precoTot = mudancaDeEstado($qtdCombos1, 4.30, 4.10, 3.80);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos1);
        }

        else if ($lista1 === "combo11") {
            $precoTot = mudancaDeEstado($qtdCombos1, 3.50, 3.20, 3.00);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos1);
        }

        else if ($lista1 === "combo12") {
            $precoTot = mudancaDeEstado($qtdCombos1, 4.20, 3.90, 3.60);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos1);
        }

        else if ($lista1 === "combo13") {
            $precoTot = mudancaDeEstado($qtdCombos1, 3.70, 3.50, 3.20);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos1);
        }

        else if ($lista1 === "combo14") {
            $precoTot = mudancaDeEstado($qtdCombos1, 3.70, 3.40, 3.20);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos1);
        }
    }
    echo ("<hr><center><h1>Menu 2:</h1></center>");

    if ( $_POST['combos2'] === "nada2" ) {
        echo ("<center><h1>Você não Escolheu nenhum combo no Segundo menu</h1></center>");
    }

    else {
        $lista1 = $_POST['combos2'];
        $qtdCombos2 = $_POST['qtdCombo2'];

        if ($lista1 === "combo15") {
            $precoTot = mudancaDeEstado($qtdCombos2, 2.50, 2.30, 2.10);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos2);
        }

        else if ($lista1 === "combo16") {
            $precoTot = mudancaDeEstado($qtdCombos2, 2.70, 2.50, 2.30);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos2);
        }

        else if ($lista1 === "combo17") {
            $precoTot = mudancaDeEstado($qtdCombos2, 5.00, 4.70, 4.50);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos2);
        }

        else if ($lista1 === "combo18") {
            $precoTot = mudancaDeEstado($qtdCombos2, 4.90, 4.60, 4.40);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos2);
        }

        else if ($lista1 === "combo19") {
            $precoTot = mudancaDeEstado($qtdCombos2, 3.10, 2.90, 2.70);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos2);
        }

        else if ($lista1 === "combo20") {
            $precoTot = mudancaDeEstado($qtdCombos2, 5.50, 5.20, 4.90);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos2);
        }

        else if ($lista1 === "combo21") {
            $precoTot = mudancaDeEstado($qtdCombos2, 5.40, 5.10, 4.80);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos2);
        }

        else if ($lista1 === "combo22") {
            $precoTot = mudancaDeEstado($qtdCombos2, 4.90, 4.70, 4.50);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos2);
        }

        else if ($lista1 === "combo23") {
            $precoTot = mudancaDeEstado($qtdCombos2, 4.00, 3.70, 3.40);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos2);
        }

        else if ($lista1 === "combo24") {
            $precoTot = mudancaDeEstado($qtdCombos2, 4.30, 4.10, 3.80);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos2);
        }

        else if ($lista1 === "combo25") {
            $precoTot = mudancaDeEstado($qtdCombos2, 3.50, 3.20, 3.00);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos2);
        }

        else if ($lista1 === "combo26") {
            $precoTot = mudancaDeEstado($qtdCombos2, 4.20, 3.90, 3.60);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos2);
        }

        else if ($lista1 === "combo27") {
            $precoTot = mudancaDeEstado($qtdCombos2, 3.70, 3.50, 3.20);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos2);
        }

        else if ($lista1 === "combo28") {
            $precoTot = mudancaDeEstado($qtdCombos2, 3.70, 3.40, 3.20);
            echo ("<center><h2>Preço pago no total: <b>R$ " . number_format($precoTot, 2, ",", ".") . "</b></h2></center>");

            connectionToSql($lista1, $precoTot, $qtdCombos2);
        }
    }


?>

<a href="listagem.php">Clique Aqui</a> para ver a listagem<br>
<a href="cadCombo.html">Clique Aqui</a> para Selecionar mais combos
