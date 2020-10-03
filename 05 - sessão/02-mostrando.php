<?php 
	require_once('config.php');

	// session_unset($_SESSION["nome"]);
	// limpa as variáveis de sessão

	session_destroy($_SESSION["nome"]);
	// limpa as variáveis de sessão e sai daquela sessão

	echo $_SESSION["nome"];
?>