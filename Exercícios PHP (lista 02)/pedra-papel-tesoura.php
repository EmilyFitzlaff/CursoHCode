<form>
	<p>Escolha: </p>
	<input type="radio" name="jogo" id="1" value="1">
	<label for="1">Pedra</label><br>
	<input type="radio" name="jogo" id="2" value="2">
	<label for="2">Papel</label><br>
	<input type="radio" name="jogo" id="3" value="3">
	<label for="3">Tesoura</label>
	<br><br>
	<input type="submit" name="Enviar">
</form>

<?php
if (isset($_GET['jogo'])) { 
	$jogo = $_GET['jogo'];
	$parceiro = rand(1,3);

	if ($parceiro == 1) {
		echo "Parceiro: pedra <br>";
	}

	elseif ($parceiro == 2) {
		echo "Parceiro: papel <br>";
	}

	elseif ($parceiro == 3) {
		echo "<strong>Parceiro:</strong> tesoura <br>";
	}

	if ($jogo == $parceiro) {
		echo "<h2>Jogadas iguais!</h2>";
	}

	elseif (($jogo == 1 && $parceiro == 2) || ($jogo == 2 && $parceiro == 3) || ($jogo == 3 && $parceiro == 1))  {
		echo "<h2>Você perdeu!</h2>";
	}

	else {
		echo "<h2>Você ganhou!</h2>";
	}
}
?>