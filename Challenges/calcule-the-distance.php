<form>
	<label>Informe as coordenadas do ponto A: </label>
	<input type="text" name="ax" placeholder="Valor de X">
	<input type="text" name="ay" placeholder="Valor de Y">
	<br>
	<label>Informe as coordenadas do ponto B: </label>
	<input type="text" name="bx" placeholder="Valor de X">
	<input type="text" name="by" placeholder="Valor de Y">
	<br><br>
	<input type="submit" name="Enviar">
</form>

<?php
	if (isset($_GET['ax']) && ($_GET['ay']) && ($_GET['bx']) && ($_GET['by'])) {
		$ax = $_GET['ax'];
		$ay = $_GET['ay'];
		$bx = $_GET['bx'];
		$by = $_GET['by'];

		$distancia = ((($bx - $ax)**2) + (($by - $ay)**2));
		$distancia = sqrt($distancia);
		echo "Distância entre as coordenadas A e B: $distancia";
	}
?>