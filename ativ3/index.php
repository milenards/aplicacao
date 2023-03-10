<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>idade</title>
</head>
<body>
<h1>Verificar idade</h1>
	<form method="post" action="">
		<label>Digite sua idade:</label>
		<input type="number" name="idade" required>
        <label>Digite seu nome:</label>
		<input type="text" name="nome" required>
		<input type="submit" value="Verificar">
	</form>
    
	<?php
        $nome = $_POST ['nome'];
		if(isset($_POST['idade'])) {
			$idade = $_POST['idade'];
            
			if ($idade >= 18) {
				echo "<p>Você, $nome é maior de 18 anos.</p>";
			} else {
				echo "<p>Você, $nome é menor de 18 anos.</p>";
			}
		}
	?>
    
</body>
</html>