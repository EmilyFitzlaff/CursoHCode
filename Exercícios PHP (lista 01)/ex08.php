<!-- Faça um programa que pergunte quanto você ganha por hora e o número de horas trabalhadas no mês. Calcule e mostre o total do seu salário no referido mês. -->
<form>
	<label for="valorHora">Informe o valor da sua hora trabalho: </label>
	<input type="text" name="valorHora" id="valorHora">

	<br><br>

	<label for="qntHora">Informe a quantidade de horas trabalhadas no mês: </label>
	<input type="text" name="qntHora" id="qntHora">

	<br><br>

	<input type="submit" value="Enviar">
</form>
<hr>

<?php
if (isset($_GET['valorHora']) && ($_GET['qntHora'])) {
	$valorHora = $_GET['valorHora'];
	$qntHora = $_GET['qntHora'];

	$salario = $valorHora * $qntHora;
	echo "Seu salário é: R$ $salario";
}
?>