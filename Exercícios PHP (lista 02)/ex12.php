<form>
	<label for="salario">Informe seu salário: </label>
	<input type="text" name="salario" id="salario">
	<input type="submit" name="Enviar">
</form>

<hr>

<?php
	if (isset($_GET['salario'])) {
		$salario = $_GET['salario'];

		echo "Seu salário: R$ $salario <br>";

		if ($salario <= 280) {
			$percentual = 0.20;
			echo "Percentual de aumento: " . $percentual * 100 . "% <br>";
			$aumento = $salario + ($salario*$percentual);
			$diferenca = $aumento - $salario;
			echo "Valor do aumento: R$ $diferenca <br>";
			echo "Valor do salário com aumento: R$ $aumento <br>";
		}

		elseif ($salario > 280 && $salario <= 700) {
			$percentual = 0.15;
			echo "Percentual de aumento: " . $percentual * 100 . "% <br>";
			$aumento = $salario + ($salario*$percentual);
			$diferenca = $aumento - $salario;
			echo "Valor do aumento: R$ $diferenca <br>";
			echo "Valor do salário com aumento: R$ $aumento <br>";
		}

		elseif ($salario > 700 && $salario <= 1500) {
			$percentual = 0.10;
			echo "Percentual de aumento: " . $percentual * 100 . "% <br>";
			$aumento = $salario + ($salario*$percentual);
			$diferenca = $aumento - $salario;
			echo "Valor do aumento: R$ $diferenca <br>";
			echo "Valor do salário com aumento: R$ $aumento <br>";
		}

		else  {
			$percentual = 0.05;
			echo "Percentual de aumento: " . $percentual * 100 . "% <br>";
			$aumento = $salario + ($salario*$percentual);
			$diferenca = $aumento - $salario;
			echo "Valor do aumento: R$ $diferenca <br>";
			echo "Valor do salário com aumento: R$ $aumento <br>";
		}
	}
?>