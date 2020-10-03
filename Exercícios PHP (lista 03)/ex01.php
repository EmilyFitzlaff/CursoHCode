<form>
	<label for="valorUnitario">Informe o valor unitário do produto: </label><br>
	<input type="text" name="valorUnitario" id="valorUnitario" placeholder="Digite aqui" required>

	<br><br>

	<label for="qnt">Informe a quantidade do produto: </label><br>
	<input type="number" name="qnt" id="qnt" placeholder="Digite aqui" required>

	<br><br>

	<input type="submit" name="Enviar">
</form>

<?php
	if (isset($_GET['valorUnitario']) && isset($_GET['qnt'])) {
		$valorUnitario = $_GET['valorUnitario'];
		$qnt = $_GET['qnt'];

		if (($valorUnitario > 0) && ($qnt > 0)) {
			echo 
			"<table border='1'>
				<thead>
					<th>Quantidade</th>
					<th>Valor</th>
				</thead>
				<tbody>
			";
			for ($i = 1; $i <= $qnt; $i++) { 
				echo '<tr>
						<td>' . $i . ' </td> 
						<td>' . $i * $valorUnitario . ' </td> 
					  </tr>';
			}
			echo "</tbody></table>";
		} 
		else echo "Valores inválidos";
	}
?>

