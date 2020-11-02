<form>
	<label>Informe um letra: </label>
	<input type="text" name="letra" id="letra">
	<input type="submit" name="Enviar">
</form>

<?php
	if (isset($_GET['letra'])) {
		$letra = $_GET['letra'];
		$letra = strtolower($letra);

		if ($letra === 'a' || $letra === 'e' || $letra === 'i' || $letra === 'o' || $letra === 'u') {
			echo "Vogal";
		} else echo "Consoante";
	}
?>