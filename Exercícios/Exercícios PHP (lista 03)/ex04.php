<form>
	<label for="valor">Informe o valor do produto: </label><br>
	<input type="text" name="valor" id="valor" placeholder="Digite aqui" required>
	<br><br>
	<label for="codigo">Informe o código de origem: </label><br>
	<input type="number" name="codigo" id="codigo" placeholder="Digite aqui" required>
	<br><br>
	<input type="submit" name="Enviar">
</form>

<?php
	if (isset($_GET['valor']) && isset($_GET['codigo'])) {
		$valor = $_GET['valor'];
		$codigo = $_GET['codigo'];

		echo "Valor do produto: R$ $valor <br> 
			  Código de origem: ";
		switch ($codigo) {
			case 1:
				echo "Sul";
				break;

			case 2:
				echo "Norte";
				break;

			case 3:
				echo "Leste";
				break;

			case 4:
				echo "Oeste";
				break;

			case 5:
				echo "Nordeste";
				break;

			case 6:
				echo "Nordeste";
				break;

			case 7:
				echo "Centro-oeste";
				break;

			case 8:
				echo "Centro-oeste";
				break;
			
			default:
				echo "Importado";
				break;
		}
	}

?>
