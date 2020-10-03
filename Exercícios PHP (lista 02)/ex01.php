<form>
	<label>Informe um número</label>
	<input type="text" name="n1">
	<label>Informe outro número</label>
	<input type="text" name="n2">
	<input type="submit" name="Enviar">
</form>

<?php
	if (isset($_GET['n1']) && ($_GET['n2'])) {
		$n1 = $_GET['n1'];
		$n2 = $_GET['n2'];

		if ($n1 > $n2) {
			echo "$n1 > $n2";
		} elseif ($n2 > $n1) {
			echo "$n2 > $n1";
		} else echo "Números iguais";
	}
?>