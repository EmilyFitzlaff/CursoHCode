<?php
// tipos básicos
$nome = "Hcode";
$site = 'hcode.com.br';
$ano = 1990;
$salario = 3500.99;
$bloqueado = false;

// tipos compostos 
$frutas = array('abacaxi', 'laranja', 'uva');
echo $frutas[2];
echo "<br>";

    // objeto
    $data = new DateTime();
    var_dump($data);
    echo "<br>";

// resource e null
$arquivo = fopen("02-tipos.php", "r");
var_dump($arquivo);

$nulo = null;
var_dump($nulo);
?>