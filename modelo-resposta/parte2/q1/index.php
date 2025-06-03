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
		<h1>Formulário de Contato</h1>
	</header>
	<div class="container">
		<div class="box formulario">
			<h2>Qual é o maior e o menor número</h2>
			<form action="resposta.php" method="post">
				<label>Número 1:
					<input type="text" id="nome" name="nome" required>
				</label>

				<label>Número 2:
					<input type="email" id="email" name="email" required>
				</label>

				<label>Número 3:
					<input type="tel" id="telefone" name="telefone" required>
				</label>

				<label>Assunto:
					<select name="assunto">
						<option></option>
						<option value="1">Nota</option>
						<option value="2">Trabalho</option>
						<option value="3">Feriado</option>
					</select>
			   </label>

			   <fieldset>
				<legend>Selecione suas frutas favoritas:</legend>
				<div>
				  <input type="checkbox" id="banana" name="frutas" value="banana">
				  <label for="banana">Banana</label>
				</div>
				<div>
				  <input type="checkbox" id="morango" name="frutas" value="morango">
				  <label for="morango">Morango</label>
				</div>
				<div>
				  <input type="checkbox" id="uva" name="frutas" value="uva">
				  <label for="uva">Uva</label>
				</div>
				<div>
				  <input type="checkbox" id="abacaxi" name="frutas" value="abacaxi">
				  <label for="abacaxi">Abacaxi</label>
				</div>
				<div>
				  <input type="checkbox" id="laranja" name="frutas" value="laranja">
				  <label for="laranja">Laranja</label>
				</div>
			  </fieldset>

				<label>Mensagem:
					<textarea id="mensagem" name="mensagem" required></textarea>
				</label>

				<button name="enviar"> Enviar </button>
			</form>
		</div>		
	</div>
</body>
</html>