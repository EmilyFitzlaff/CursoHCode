<form>
	<label>Informe um número: </label>
	<input type="text" name="n" id="n">
	<input type="submit" name="Enviar">
</form>

<?php
	if (isset($_GET['n'])) {
		$n = $_GET['n'];

		if ($n % 2 == 0) {
			echo "Número par <br>";
			echo $n + 1 . " - número ímpar";
		} else { 
			echo "Número ímpar <br>";
			echo $n + 1 . " - número par";
		}
	}
?>