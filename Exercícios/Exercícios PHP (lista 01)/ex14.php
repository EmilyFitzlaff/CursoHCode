<form>
	<label id="tam">Informe o tamanho em metros quadrados da área a ser pintada: </label>
	<input type="text" name="tam" id="tam">
	<input type="submit" name="Enviar">
</form>

<?php
	if(isset($_GET['tam'])) {
		$tam = $_GET['tam'];
		$lit = $tam/3;
		$preco = 80;

		echo "A quantidade de litros necessária para pintar $tam m² é $lit litros <br>";
		$lat = ceil($lit/18); // esta função arredondará para cima 

		if ($lat <= 0) {
			echo "Preço final: R$ " . $preco;
		} else 
		echo "Preço final: R$ " . $lat*$preco;
	}
?>