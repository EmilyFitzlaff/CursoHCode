<form>
	<label>Informe o peso: </label>
	<input type="text" name="peso" id="peso">
	<input type="submit" name="Enviar">
</form>

<?php
	if(isset($_GET['peso'])) {
		$peso = $_GET['peso'];

		$excedente = $peso - 50;

		if ($excedente <= 0) {
			echo "Não possui multa. Excedente: $excedente";
		}
		else {
			$multa = $excedente*4;
			echo "Excedente: $excedente. A multa é: R$ $multa";
		}
	}
?>