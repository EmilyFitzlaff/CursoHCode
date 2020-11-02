<form>
	<label for="n1">Informe a primeira nota: </label><br>
	<input type="text" name="n1" id="n1" placeholder="Digite aqui">
	<br><br>
	<label for="n2">Informe a segunda nota: </label><br>
	<input type="text" name="n2" id="n2" placeholder="Digite aqui">
	<br><br>
	<input type="submit" name="Enviar">
</form>

<?php
	if (isset($_GET['n1']) && ($_GET['n2'])) {
		$n1 = $_GET['n1'];
		$n2 = $_GET['n2'];

		$media = ($n1 + $n2)/2;

		echo "<strong>Nota 01:</strong> $n1 <br>";
		echo "<strong>Nota 02:</strong> $n2 <br>";
		echo "<strong>Média:</strong> $media <br>";
		echo "<strong>Conceito:</strong> ";

		echo round(251852, -3);

		if (($media >= 9) && ($media <= 10)) {
			echo "A";
		} elseif (($media < 9) && ($media >= 7.5)) {
			echo "B";
		} elseif (($media < 7.5) && ($media >= 6)) {
			echo "C";
		} elseif (($media < 6) && ($media >= 4)) {
			echo "D";
		} else echo "E";

		echo "<br>";
		
		if (($media >= 6) && ($media <= 10)) {
			echo "Aprovado!";
		} else echo "Reprovado.";
				
	}
?>