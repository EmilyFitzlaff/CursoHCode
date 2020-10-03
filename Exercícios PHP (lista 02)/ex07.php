<form>
	<?php
		$num = array();
		for ($i = 1; $i <= 3; $i++) { 
			echo '<label>Informe o número '.$i.'</label>';
			echo '<input type="text" name="n'.$i.'" required>';
			array_push($num, $_GET['n'.$i.'']);
			echo "<br>";
		}
	?>

	<input type="submit" name="Enviar">
</form>

<?php
	print_r($num);
	asort($num);
	echo "<br> Valores ordenados: ";
	print_r($num);
?>