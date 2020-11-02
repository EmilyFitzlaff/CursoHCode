<form>
	<label for="n1">Digite um número: </label>
	<input type="text" name="n1" id="n1">
	<br><br>
	<label for="n2">Digite um número: </label>
	<input type="text" name="n2" id="n2">
	<br>
	<input type="submit" value="Enviar">
</form>

<?php 
// Faça um programa que peça dois números e imprima a soma.
if(isset($_GET['n1']) && ($_GET['n2'])) {
	$n1 = $_GET['n1'];
	$n2 = $_GET['n2'];

	$soma = $n1 + $n2;

	echo "$n1 + $n2 = $soma";
} 
?>