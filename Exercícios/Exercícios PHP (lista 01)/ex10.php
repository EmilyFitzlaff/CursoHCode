<form>
	<label>Digite um número: </label>
	<input type="text" name="n1" id="n1">
	<br><br>
	<label>Digite outro número: </label>
	<input type="text" name="n2" id="n2">
	<br><br>
	<label>Digite outro número: </label>
	<input type="text" name="n3" id="n3">
	<br><br>
	<input type="submit" name="Enviar">
</form>

<?php
	if (isset($_GET['n1']) && ($_GET['n2']) && ($_GET['n3'])) {
		$n1 = $_GET['n1'];
		$n2 = $_GET['n2'];
		$n3 = $_GET['n3'];

		$soma = $n1 * 3 + $n3; 
		
		echo "O produto do dobro do primeiro com metade do segundo: " . ($n1*2)*($n2/2) . "<br>";
		echo "A soma do triplo do primeiro com o terceiro: $soma <br>";
		echo "O terceiro elevado ao cubo: " .  ($n3**3);
	}
?>