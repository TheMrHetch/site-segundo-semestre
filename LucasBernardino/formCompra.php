<!DOCTYPE html>
<html>
	<head>	
	<title>Cinema - Creative Section - Compra de Ingressos</title>
	<meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="../index.css">
	<link rel="stylesheet" type="text/css" href="formCompra.css">
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	</head>
	<body>
		<div class="cape"></div>
		<ul>
			<li> <a href="../index.html">Home</a> </li>
			<li> <a href="../Equipe/faleCon.html">Fale Conosco</a> </li>
			<li> <a href="../JoasJosue/formulario.html">Cadastre-se</a> </li>
			<li class="dropdown">
                <a class="dropbtn" href="#">Listagens</a>
                <div class="dropdown-content">
                    <a href="../JoasJosue/sql1.php">Cadastro de Usuários</a>
                    <a href="Tabela.php">Ingressos</a>
					<a href="../GabrielRamos/listagem.php">Combos</a>
					<a href="../Equipe/listaMensagem.php">Fale Conosco</a>
                    <a href="../AllanLapa/lista.php">Cadastro de filmes</a>
                    <a href="../GuilhermeRatib/listagemEvento.php">Cadastro de eventos</a>
                </div>
            </li>
			<li> <a href="../GabrielRamos/combos.html">Compre seu combo</a> </li>
			<li> <a href="../AllanLapa/FormularioAllan.html">Cadastro de filmes</a> </li>
			<li> <a href="../GuilhermeRatib/cadastroEvento.html">Cadastro de filmes</a> </li>
		</ul>
	<center><h2>Compra de ingresso: </h2></center>
	<form action="Compra.php" method="post" enctype="multipart/form-data" >
	
		<?php
			$filmes = $_GET['filme'];
			echo '
				<div>
					<label>Filme:</label>
						<input type="text" readonly="true" value=' . $filmes . ' class="filme" name="ingFilme">
				</div>
			';
		?>
	
		<div>
			<label>Tipo de ingresso:</label>
				<select name="ingresso" id="ingresso" value="ingresso">
					<option value="Meia(15R$)">Meia R$15</option>
					<option value="Meia3D(18R$)">Meia 3D R$18</option>
					<option value="MeiaIMAX(25R$)">Meia IMAX R$25</option>
					<option value="Inteira(25R$)">Inteira R$25</option>
					<option value="Inteira3D(35R$)">Inteira 3D R$35</option>
					<option value="InteiraIMAX(50R$)">Inteira IMAX R$50</option>
				</select>
		</div>
		
		<div>
			<label>Linguagem:</label>
				<select name="lingua" id="lingua" value="lingua">
					<option value="Dublado">Dublado</option>
					<option value="Legendado">Legendado</option>
				</select>
		</div>
		
		<div>
			<label>Quantidade de ingresso(s)</label>
				<select name="quantidade" id="quantidade" value="quantidade">
					<option value="1"> 1 </option>
					<option value="2"> 2 </option>
					<option value="3"> 3 </option>
					<option value="4"> 4 </option>
					<option value="5"> 5 </option>
					<option value="6"> 6 </option>
					<option value="7"> 7 </option>
				</select>
		</div>
			
		<div>
			<label>Pagamento:</label>
				<select name="pagamento" id="pagamento" value="pagamento">
					<option value="Debito">Cartao de Crédito</option> 
					<option value="Credito">Cartao de Débito</option>
				</select>
		</div>

		<div>
		<label>Nome:</label>
			<input type="text" name="nome" id="nome" placeholder="Digite seu nome completo" maxlength="50" required>
		</div>

		<div>
		<label>CPF:</label>
			<input type="text" name="cpf" id="cpf" placeholder="Digite o número do seu CPF" maxlength="15" required>
		</div>

		<div>
			<label>Numero do cartão:</label>
				<input type="text" name="cartao" id="cartao" placeholder="Digite o número do cartão" maxlength="20" required>
		</div>

		<div>
			<label>Codigo de segurança:</label>
				<input type="text" name="codigo" id="codigo" placeholder="Digite o código de segurança" maxlength="3" required>
		</div>

		<div>
			<label>Validade do cartão:</label>
				<input type="text" name="validade" id="validade" placeholder="Digite a validade do cartão" maxlength="7" required>
		</div>
		
		<div>
			<label>Telefone Residencial:</label>
				<input type="text" name="tel" id="tel"	placeholder="Digite o número do telefone" maxlength="15" required>
		</div>

		<div>
			<label>Telefone Celular:</label>
				<input type="text" name="cel" id="cel"	placeholder="Digite o número do celular"maxlength="15" required>
		</div>

		<div>
			<label>Data de nascimento:</label>
				<input type="date" name="nascimento" id="nascimento" placeholder="Digite a data de nascimento" maxlength="10" required>
		</div>

		<div class="button">
			<button type="submit">Finalizar Compra</button>		
		</div>
	</form>
</body>
</html>