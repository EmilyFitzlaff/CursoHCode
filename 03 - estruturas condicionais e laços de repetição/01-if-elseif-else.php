<?php
/* 
estrutura básica 
if (codição) {
    comandos;
}
*/
$qualASuaIdade = 17;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeIdosa = 65;

if ($qualASuaIdade < $idadeCrianca) {
    echo "Criança.";
}
elseif ($qualASuaIdade >= $idadeCrianca && $qualASuaIdade < $idadeMaior) {
    echo "Adolescente";
}
elseif ($qualASuaIdade >= $idadeIdosa) {
    echo "Idoso";
} else echo "Adulto";

echo "<br>";

// comparador ternário (IF de uma linha só) - pode ser utilizado quando tem uma condição rápida
echo ($qualASuaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";

?>