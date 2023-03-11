<form method="post" action="processar.php">
		<label>Nome:</label>
		<input type="text" name="produto" required>
		<br>
		<label>Categoria:</label>
		<input type="text" name="categoria" required>
		<br>
		<label>Quantidade:</label>
		<input type="text" name="quantidade" required>
		<br>
        <label>Preço de compra:</label>
		<input type="number" name="pCompra" required>
        <br>
        <label>Preço de Venda:</label>
		<input type="text" name="pVenda" required>
		<br>
    
		<input type="submit" value="Enviar">
	</form>