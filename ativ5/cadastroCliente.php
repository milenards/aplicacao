<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aplicação 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    
	<form method="post" action="processar.php">
		<label>Nome:</label>
		<input type="text" name="nome" required>
		<br>
		<label>CPF:</label>
		<input type="email" name="CPF" required>
		<br>
		<label>Rua:</label>
		<input type="text" name="rua" required>
		<br>
        <label>Número:</label>
		<input type="number" name="numero" required>
        <br>
        <label>bairro:</label>
		<input type="text" name="bairro" required>
		<br>
        <label>Cidade:</label>
		<input type="text" name="cidade" required>
		<br>
        <label>Estado:</label>
		<input type="text" name="estado" required>
		<br>
        <label>Email:</label>
		<input type="email" name="email" required>
		<br>
        <label>Telefone:</label>
		<input type="tel" name="telefone" required>
		<br>
        <label>Senha:</label>
		<input type="password" name="senha" required>
		<br>

		<input type="submit" value="Enviar">
	</form>
    
</body>
</html>