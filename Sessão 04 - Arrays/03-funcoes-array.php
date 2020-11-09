<?php
	// funções em PHP

	$pessoas = array();

	// irá incluir mais informações no array
	array_push($pessoas, $info = array
		('nome' => 'João', 
	     'idade' => 20));

	array_push($pessoas, $info = array
		('nome' => 'Emily', 
	     'idade' => 19));

	print_r($pessoas);

?>