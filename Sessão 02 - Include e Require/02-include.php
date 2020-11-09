<?php
// vai incluir o arquivo e caso esteja com erro, vai continuar tentando funcionar 
// include('01-include.php');

// obriga que o arquivo exista e esteja funcionando - se estiver com algum erro, vai gerar um fatal error
require('01-include.php'); 

// vai chamar a função apenas uma vez
require_once('01-include.php');
$resultado = somar(10, 20);
echo $resultado;
?>