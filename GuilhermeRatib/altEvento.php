<?php

	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$nome = $_GET['n'];
		$email = $_GET['em'];
		$evento = $_GET['ev'];
		$local = $_GET['l'];
		$hora = $_GET['h'];
		$qtdp = $_GET['q'];
		
		
		include "../conn.php";
		mysqli_select_db($cliente, "eventos");
		
		echo "<html>
			<head>
				<title>Cadastro - Creative Section</title>
				<meta charset='utf-8'>
				<link rel='stylesheet' href='../index.css' type='text/css'>
				<link rel='stylesheet' href='cores.css' type='text/css'>
				<link rel='shortcut icon' href='../favicon.ico' type='image/x-icon'>
			</head>
			<body>
				<h1>Cadastro do Cliente - Creative Section.</h1>
				<form action='alterandoEvento.php'
					  method='post'
					  enctype='multipart/form-data'>
				<h3>Locação de eventos:</h3>
				A locação de eventos na Creative Section necessita de diversas informações.  Todas elas estão listadas abaixo - apenas selecione corretamente e a empresa do local selecionado irá verificar seu pedido, respondendo-lhe por E-mail.
				
				<h3>Se você está nessa página, você está alterando o seguinte evento:</h3><br>
				<table border='1'>
					<tr>
						<th>ID</th>
						<th>Nome</th>
						<th>E-mail</th>
						<th>Local</th>
						<th>Hora</th>
						<th>Quantidade de pessoas</th>
					</tr>
					<tr>
						<td>$id</td>
						<td>$nome</td>
						<td>$email</td>
						<td>$local</td>
						<td>$hora</td>
						<td>$qtdp</td>
					</tr>
				</table>
				
				<div>
					<label>ID:</label>
						<input name='id' type='text' size='5' maxlength='4' value='$id' readonly='true'>
				</div>
				<div>
				<label>Nome completo:</label>
					<input name='nome' type='text' size='50' maxlength='100' value='$nome'>
				</div>

				<div>
					<label>E-mail:</label>
						<input name='email' type='text' size='50' maxlength='50' value='$email'>
				</div>

				<div>
					<label>Selecione o evento desejado:*</label>
						<select name='evento'>
							<option value='SC'>Sala Convencional</option>
							<option value='SL'>Sala de Luxo</option>
							<option value='PA'>Palestra</option>
							<option value='AN'>Aniversário</option>
						</select><h4>Selecionado anteriormente: $evento</h4>
				</div>

				<div>
					<label>Selecione o local do evento:*</label>
						<select name='local'>
							<option value='TA' selected>Tatuapé</option>
							<option value='IT'>Itaquera</option>
							<option value='LI'>Liberdade</option>
							<option value='AR'>Aricanduva</option>
						</select><h4>Selecionado anteriormente: $local</h4>
				</div>

				<div>
					<label>Selecione o horário do evento:</label>
						<input type='time' name='hora' value='$hora'>
				</div>

				<div>
					<label>Seleciona a quantidade de pessoas:</label>
					<input type='number' name='qtdp' min='50' max='200' value='$qtdp' placeholder='Mínimo de 50 pessoas.  Máximo, 200.'>
				</div>

				<div>
					<label>Os campos marcados com * necessitam ser adequados a sua escolha.</label>
				</div>
				<div class='button'>
					<button type='submit'>Editar dados</button>
					<button type='reset'>Limpar dados</button>
				</div>
			</body>
		</html>";
	}

?>

<a href="listagemEvento.php">Clique aqui</a> para visualizar os eventos cadastrados.