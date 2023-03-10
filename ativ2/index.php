<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
<h1>Tabuada do 7</h1>
	<?php
		for ($i = 1; $i <= 10; $i++) {
			$resultado = $i * 7;
			echo "7 x " . $i . " = " . $resultado . "<br>";
		}
	?>
    
</body>
</html>