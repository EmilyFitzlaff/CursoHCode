<form>
	<label>Informe qual turno você estuda: </label>
	<input type="radio" name="turno" value="m" id="m"><label for="m">Matutino</label>
	<input type="radio" name="turno" value="v" id="v"><label for="v">Vespertino</label>
	<input type="radio" name="turno" value="n" id="n"><label for="n">Noturno</label>
	<input type="submit" name="Enviar">
</form>
<br>
<?php
	if (isset($_GET['turno'])) {
		$turno = $_GET['turno'];

		if ($turno === 'm') {
			echo "Bom dia!";
		} elseif ($turno === 'v') {
			echo "Boa tarde!";
		} else echo "Boa noite!";
	}
?>