<form>
	<label for="sexo">Digite F para feminino ou M para masculino</label>
	<input type="text" name="sexo" id="sexo">
	<input type="submit" name="Enviar">
</form>

<?php
	if (isset($_GET['sexo'])) {
		$sexo = $_GET['sexo'];
		if ($sexo === 'f' || $sexo === 'F') {
			echo "Feminino";
		} elseif ($sexo === 'm' || $sexo ==='M') {
			echo "Masculino";
		} else echo "Entrada inválida";
	}
?>