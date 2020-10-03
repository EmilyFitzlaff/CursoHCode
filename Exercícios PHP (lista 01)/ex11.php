<form>
	<p>Informe seu sexo:</p>
	<input type="radio" name="sexo" id="f" value="f"><label for="f">Feminino</label>
	<input type="radio" name="sexo" id="m" value="m"><label for="m">Masculino</label>
	<br><br>
	<label for="altura">Informe sua altura: </label>
	<input type="text" name="altura" id="altura">
	<br><br>
	<input type="submit" value="Enviar">
</form>

<?php
if (isset($_GET['sexo']) && ($_GET['altura'])) {
	$sexo = $_GET['sexo'];
	$altura = $_GET['altura'];

	// var_dump($sexo, $altura);

	if ($sexo === 'f') {
		$peso = (62.1*$altura) - 44.7;
		echo "Seu peso ideal é: $peso";
	}
	elseif ($sexo === 'm') {
		$peso = (72.7*$altura) - 58;
		echo "Seu peso ideal é: $peso";
	}
}
?>