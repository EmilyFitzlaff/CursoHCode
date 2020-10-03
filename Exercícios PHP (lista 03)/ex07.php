<form>
	<?php
		for ($i = 1; $i <= 3; $i++) { 
			echo '<label>Informe o lado '. $i .' do triângulo: </label> <br>';
			echo '<input type="text" name="l'.$i.'" placeholder="Digite aqui: "> <br><br>';
		}
	?>

	<input type="submit" name="Enviar">
</form>

<?php
	if (isset($_GET['l1']) && ($_GET['l2']) && ($_GET['l3']))  {
		$l1 = $_GET['l1'];
		$l2 = $_GET['l2'];
		$l3 = $_GET['l3'];

		// condição de existência
		if (
			((abs($l2 - $l3)) < $l1) && ((abs($l2 + $l3)) > $l1) && 
			((abs($l1 - $l3)) < $l2) && ((abs($l1 + $l3)) > $l2) && 
			((abs($l1 - $l2)) < $l3) && ((abs($l1 + $l2)) > $l3)
		   ) {
			echo "Triângulo válido <br>";

			if (($l1 == $l2) && ($l1 == $l3)) {
				echo "Triângulo equilátero";
			} elseif (($l1 != $l2) && ($l1 != $l3) && ($l2 != $l3)) {
				echo "Triângulo escaleno";
			} else echo "Triângulo isósceles";
		} else echo "Valores inválidos";
	}
?>