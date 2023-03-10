<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
<h1>Tabuada</h1>
	
	<form method="post">
		<label>Digite um número:</label>
		<input type="number" name="numero" required>
		<br>
		<input type="submit" value="Gerar tabuada">
	</form>
	
	<?php
	// Verifica se o formulário foi enviado
	if(isset($_POST['numero'])){
		
		// Obtém o número informado pelo usuário
		$numero = $_POST['numero'];
		
		// Constrói a tabuada do número
		echo "<h2>Tabuada do $numero:</h2>";
		for($i = 1; $i <= 10; $i++){
			$resultado = $numero * $i;
			echo "$numero x $i = $resultado <br>";
		}
	}
	?>
</body>
</html>