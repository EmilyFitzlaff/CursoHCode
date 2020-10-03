<form>
	<?php 
		for ($i=1; $i <= 4; $i++) { 
			echo '<label>Informe a nota '. $i . ': </label>';
			echo '<input type="text" name="n'. $i .'">';
			echo '<hr>';
		}
	?>
	<input type="submit" name="Enviar">
</form>

<?php 
if(isset($_GET['n1']) && 
	    ($_GET['n2']) && 
		($_GET['n3']) &&
		($_GET['n4'])) {
	$n1 = $_GET['n1'];
	$n2 = $_GET['n2'];
	$n3 = $_GET['n3'];	
	$n4 = $_GET['n4'];

	$media = ($n1 + $n2 + $n3 + $n4)/4;
	echo "A média das notas é: $media";
}
?>