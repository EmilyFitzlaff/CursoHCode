<form>
	<?php 	
		for ($i = 0; $i  < 3; $i++) { 
			echo '<label>Informe o número ' . $i.': ';
			echo '<input type="number" name="n[]" required> <br><br>';
		}
	?>

	<input type="submit" name="Enviar">
</form>

<?php 
	$n = $_GET['n'];
	// print_r($n);

	$maior = $n[0];
	$menor = $n[0];

	for ($i = 0; $i < 3; $i++) { 
		if ($n[$i] > $maior) {
			$maior = $n[$i];
		} elseif ($n[$i] < $menor) {
			$menor = $n[$i];
		}
	}

	echo "<br> Maior número: $maior <br>";
	echo "Menor número: $menor";
?>
