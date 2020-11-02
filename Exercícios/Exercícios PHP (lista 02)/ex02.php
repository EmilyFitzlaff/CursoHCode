<form>
	<label for="n">Informe um número:</label>
	<input type="text" name="n" id="n">
	<input type="submit" name="Enviar">
</form>
<?php
	if (isset($_GET['n'])) {
		$n = $_GET['n'];
		if ($n > 0) {
			echo "Número positivo";
		} elseif ($n < 0) {
			echo "Número negativo";
		} else echo "Número nulo";
	}
?>