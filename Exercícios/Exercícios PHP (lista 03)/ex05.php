<form>
	<label for="media">Informe a sua média: </label><br>
	<input type="text" name="media" id="media" placeholder="Digite aqui" required>
	<br><br>
	<input type="submit" name="Enviar">
</form>

<?php
	if (isset($_GET['media'])) {
		$media = $_GET['media'];

		if (($media >= 0) && ($media < 3)) {
			echo "Reprovado!";
		} elseif (($media >= 3) && ($media < 7)) {
			echo "Em exame.";
		} elseif (($media >= 7) && ($media <= 10)) {
			echo "Aprovado!";
		} else echo "Nota inválida.";
	}
?>