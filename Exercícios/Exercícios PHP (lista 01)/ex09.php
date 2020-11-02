<form>
	<label for="f">Informe a temperatura em Fahrenheit: </label>
	<input type="text" name="f" id="f">
	<input type="submit" name="Enviar">
</form>

<?php
if (isset($_GET['f'])) {
	$f = $_GET['f'];
	$c = ($f - 32)/1.8;
	echo "A temperatura em Celsius é: $c";
}
?>