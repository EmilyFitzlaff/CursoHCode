<form>
	<label>Informe a primeira nota: </label>
	<input type="text" name="n1">
	<label>Informe a segunda nota: </label>
	<input type="text" name="n2">
	<input type="submit" name="Enviar">
</form>

<?php

if (isset($_GET['n1']) && ($_GET['n2'])) {
	$n1 = $_GET['n1'];
	$n2 = $_GET['n2'];

	$soma = $n1 + $n2;

	if ($soma/2 >= 7) {
		echo "Aprovado";
	} else echo "Reprovado";
}