<form>
	<label>Informe um ano: </label>
	<input type="text" name="ano" id="ano">
	<input type="submit" name="Enviar">
</form>
<?php
	if (isset($_GET['ano'])) {
		$ano = $_GET['ano'];

		$resto = $ano % 4;
		if ($resto === 0) {
			echo "Ano bissexto";
		} else echo "Não é ano bissexto";
	}
?>