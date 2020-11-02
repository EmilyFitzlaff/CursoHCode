<form>
	<label for="lado">Informe o lado do quadrado: </label>
	<input type="text" name="lado">
	<input type="submit" value="Enviar">
</form>

<?php
if (isset($_GET['lado'])) {
	$lado = $_GET['lado']; 

	$area = $lado**2;
	echo "Área do quadrado: $area";
} 
?>