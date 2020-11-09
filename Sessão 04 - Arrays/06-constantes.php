<?php
	define("SERVIDOR", "128.8.8.8", true);
	echo SERVIDOR . "<br>";
	// true -> case insensitive;

	// definindo banco de dados
	define("BD", [
		"128.8.8.8",
		"root",
		"password",
		"teste"
	]);
	print_r(BD);

	echo "<br>";

	// para saber a versão do php
	echo PHP_VERSION;
	echo DIRECTORY_SEPARATOR;
?>