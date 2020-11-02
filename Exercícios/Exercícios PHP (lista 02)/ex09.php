<form>
	<label>Informe a sua altura: </label>
	<input type="text" name="altura">
	<br><br>
	<label>Informe o seu peso: </label>
	<input type="text" name="peso">
	<br><br>
	<input type="radio" name="sexo" value="f" id="f"><label for="f">Feminino</label>
	<input type="radio" name="sexo" value="m" id="m"><label for="m">Masculino</label>
	<br><br>
	<input type="submit" name="Enviar">
</form>

<?php
if (isset($_GET['altura']) && ($_GET['peso']) && ($_GET['sexo'])) {
	$altura = $_GET['altura'];
	$peso = $_GET['peso'];
	$sexo = $_GET['sexo'];

	if ($sexo === 'f') {
		$pesoIdeal = (62.1*$altura) - 44.7;
		echo "Peso real: $peso <br>";
		echo "Peso ideal: $pesoIdeal <br>";
		echo "Altura: $altura <br>";
		echo "Sexo: feminino <br>";
		if ($peso > $pesoIdeal) {
			echo "Você está acima do peso ideal";
		} elseif ($peso == $pesoIdeal) {
			echo "Você está no peso ideal";
		} else echo "Você está abaixo do peso ideal";
	}
	elseif ($sexo === 'm') {
		$pesoIdeal = (72.7*$altura) - 58;
		echo "Peso real: $peso <br>";
		echo "Peso ideal: $pesoIdeal <br>";
		echo "Altura: $altura <br>";
		echo "Sexo: masculino <br>";
		if ($peso > $pesoIdeal) {
			echo "Você está acima do peso ideal";
		} elseif ($peso == $pesoIdeal) {
			echo "Você está no peso ideal";
		} else echo "Você está abaixo do peso ideal";
	}
}
?>