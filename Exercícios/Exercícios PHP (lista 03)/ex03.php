<form>
	<label for="dia">Digite um número correspondente ao dia da semana: </label><br>
	<input type="text" name="dia" id="dia" placeholder="Digite aqui" required>
	<br><br>
	<input type="submit" name="Enviar">
</form>

<?php
	if (isset($_GET['dia'])) {
		$dia = $_GET['dia'];

		switch ($dia) {
			case 1:
				echo "Domingo!";
				break;

			case 2:
				echo "Segunda-feira!";
				break;

			case 3: 
				echo "Terça-feira!";
				break;

			case 4:
				echo "Quarta-feira!";
				break;

			case 5:
				echo "Quinta-feira!";
				break;

			case 6:
				echo "Sexta-feira!";
				break;

			case 7:
				echo "Sábado!";
				break;
			
			default:
				echo "Entrada inválida";
				break;
		}
	}
?>