<form>
	<label for="data">Informe uma data: </label> <br>
	<input type="date" name="data" id="data">
	<br><br>
	<input type="submit" name="Enviar">
</form>

<?php
	if (isset($_GET['data'])) {
		$data = $_GET['data'];

		function data($data) {
			return date("d/m/Y", strtotime($data));
		}

		echo 'Data informada: ' . data($data);
	}
?>