<form>
	<label for="num">Informe um número: </label> <br>
	<input type="text" name="num" id="num" placeholder="Digite aqui um número">
	<br><br>
	<input type="submit" name="Enviar">
</form>
<?php
	if (isset($_GET['num'])) {
		$num = $_GET['num'];

		// terminar
	}
?>