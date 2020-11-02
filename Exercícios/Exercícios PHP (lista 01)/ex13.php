<form>
	<label for="valorHora">Informe o valor ganhado por hora trabalhada: </label>
	<input type="text" name="valorHora" id="valorHora">
	<br><br>
	<label for="qntHora">Informe a quantidade de horas trabalhas em um mês: </label>
	<input type="text" name="qntHora" id="qntHora">
	<br><br>
	<input type="submit" name="Enviar">
</form>
<hr>
<?php
if (isset($_GET['valorHora']) && ($_GET['qntHora'])) {
	$valorHora = $_GET['valorHora'];
	$qntHora = $_GET['qntHora'];

	$sb = $valorHora*$qntHora;
	echo "Salário bruto: R$ $sb <br>";
	$sl = $sb - ($sb*0.11 + $sb*0.08 + $sb*0.05);
	echo "Salário líquido: R$ $sl";
}
?>
