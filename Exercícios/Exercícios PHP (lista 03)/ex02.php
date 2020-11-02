<form>
	<label for="qntHora">Informe a quantidade de horas trabalhadas por mês: </label><br>
	<input type="text" name="qntHora" id="qntHora" placeholder="Digite aqui" required>
	<br><br>
	<label for="valorHora">Informe o valor de cada hora trabalhada: </label><br>
	<input type="text" name="valorHora" id="valorHora" placeholder="Digite aqui" required>
	<br><br>
	<input type="submit" name="Enviar">
</form>

<?php
if (isset($_GET['valorHora']) && isset($_GET['qntHora'])) {
	$valorHora = $_GET['valorHora'];
	$qntHora = $_GET['qntHora'];

	$salarioBruto = $valorHora * $qntHora;

	// desconto do IR
	if ($salarioBruto <= 900) {
		$porc = 0;
		$descontoIR = $salarioBruto*$porc;
	} elseif (($salarioBruto > 900) && ($salarioBruto <= 1500)) {
		$porc = 0.05;
		$descontoIR = $salarioBruto*$porc;
	} elseif (($salarioBruto > 1500) && ($salarioBruto <= 2500)) {
		$porc = 0.10;
		$descontoIR = $salarioBruto*$porc;
	} else {
		$porc = 0.20;
		$descontoIR = $salarioBruto*$porc;
	}

	// desconto INSS
	$porcInss = 0.10;
	$inss = $salarioBruto*$porcInss;

	// FGTS
	$porcFgts = 0.11;
	$fgts = $salarioBruto*$porcFgts;

	// total de descontos
	$totalDescontos = $descontoIR + $inss;

	// salário líquido
	$salarioLiquido = $salarioBruto - $totalDescontos;

	echo ' 
		<strong>Salário bruto: </strong> R$ ' . $salarioBruto . '<br>
		<strong>Imposto de renda (' . $porc*100 . '%): </strong> R$ ' . $descontoIR . '<br>
		<strong>INSS (' . $porcInss*100 . '%): </strong> R$ ' . $inss . ' <br>
		<strong>FGTS (' . $porcFgts*100 . '%): </strong> R$ ' . $fgts . ' <br>
		<strong>Total de descontos: </strong>R$ ' . $totalDescontos . ' <br> 
		<strong>Salário líquido: </strong>R$ ' . $salarioLiquido . ' <br> 
	';
}
?>