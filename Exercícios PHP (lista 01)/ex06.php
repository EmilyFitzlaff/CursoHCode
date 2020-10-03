<form>
	<label for="raio">Informe o raio do círculo: </label>
	<input type="text" name="raio">
	<input type="submit" value="Enviar">
</form>

<?php
// Faça um programa que peça o raio de um círculo, calcule e mostre sua área.
if (isset($_GET['raio'])) {
	$raio = $_GET['raio']; 

	$pi = 3.14;
	$area = $pi*($raio**2);
	echo "Área do círculo: $area";
} 
?>