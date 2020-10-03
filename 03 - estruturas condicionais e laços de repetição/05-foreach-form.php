<form> <!-- por padrão, como não tem action -> ficará na própria página;
			o method padrão é o GET -->
	<label for="nome">Nome: </label>
	<input type="text" name="nome" id="nome">
	<br>
	<label for="nascimento">Data de nascimento: </label>
	<input type="date" name="nascimento" id="nascimento">
	<br>
	<input type="submit" value="OK">
</form>

<?php
if (isset($_GET)) {
	foreach ($_GET as $key => $value) {
		echo "Nome do campo: ". $key;
		echo "<br>";
		echo "Valor do campo: ". $value;
		echo "<hr>";	
	}
}
?>