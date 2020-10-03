<form>
	<label for="m">Informe a medida em metros: </label>
	<input type="text" name="m" id="m">
	<input type="submit" value="Enviar">
</form>
<hr>

<?php 
	if(isset($_GET['m'])) {
		$m = $_GET['m'];

		$cm = $m*100;

		echo "$m m = $cm cm";
	}
?>