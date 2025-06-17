<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header>
		<h1>Parte 1 - Questão 1</h1>
	</header>
	<div class="container">
		<div class="box resposta">
			<h2>Cálculo de Desconto</h2>
			<?php
				if($_SERVER["REQUEST_METHOD"]=="POST"){
					$valor = $_POST["valor"];
					$taxa =  $_POST["desconto"];
					$desconto = ($valor / 100) * $taxa;
					$valorfinal = $valor - $desconto;
					echo "<p class='alerta-verde'>o valor era R$ $valor e o desconto de $taxa% deu R$ $desconto e o valor final deu R$ $valorfinal</p>";
				}


			?>
            <a href="index.php" class="link">Voltar</a>
		</div>
	</div>
</body>
</html>