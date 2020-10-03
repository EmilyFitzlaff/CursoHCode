<form>
	<label for="tam">Informe o tamanho em metros quadrados a ser pintado: </label>
	<input type="text" name="tam" id="tam">
	<input type="submit" name="Enviar">
</form>

<?php 
	if(isset($_GET['tam'])) {
		$tam = $_GET['tam'];	

	$litros = $tam/6;
	echo "A quantidade de litros necessária para pintar $tam m² é $litros litros. <br><hr>";

	$lata18 = ceil($litros/18);
	echo "A quantidade de latas de tinta de 18 litros a serem compradas é: $lata18 latas. <br>
		  O valor a ser pago é: R$ ". $lata18 * 80 . "<br>";

	echo "<hr>";

	$lata36 = ceil($litros/3.6);
	echo "A quantidade de latas de tinta de 3,6 litros a serem compradas é: $lata36 latas. <br>
		  O valor a ser pago é: R$ ". $lata36 * 25;
	}
?>
