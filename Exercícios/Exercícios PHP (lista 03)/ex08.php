<form>
	<h3>Equação de segundo grau: </h3>
	<label for="a">Informe o valor de A: </label><br>
	<input type="text" name="a" id="a" placeholder="Digite aqui" required>
	<br><br> 

	<label for="b">Informe o valor de B: </label><br>
	<input type="text" name="b" id="b" placeholder="Digite aqui" required>
	<br><br>

	<label for="c">Informe o valor de C: </label><br>
	<input type="text" name="c" id="c" placeholder="Digite aqui" required>
	<br><br>
	<input type="submit" name="Enviar">
</form>

<?php
if (isset($_GET['a']) && ($_GET['b']) && ($_GET['c'])) {
	$a = $_GET['a'];
	$b = $_GET['b'];
	$c = $_GET['c'];

	if ($a != 0 ) {
		$delta = ((-$b)**2) - 4 * $a * $c;

		if ($delta > 0) {
			echo "Possuí duas raízes reais <br>";
			$x1 = ((-$b) + sqrt($delta))/2*$a;
			$x2 = ((-$b) - sqrt($delta))/2*$a;

			echo "Raíz 01 = $x1 <br> Raíz 02 = $x2";
		} elseif ($delta == 0) {
			echo "Possuí apenas uma raíz real <br>";
			$x = ((-$b))/2*$a;
			echo "Raíz = $x";
		} else {
			echo "Não possuí raíz dentro dos reais.";
		}
	} else {
		echo "Não é uma equação de segundo grau, pois A = 0";
	}
}
?>