<?php
    $unidavi = "centro universitário para o desenvolvimento do alto vale do itajaí";
    $lab = "laboratório de informática";

    var_dump($unidavi, $lab);

    echo "<br>";

    echo "ABC $unidavi $lab";

    echo "<br>";

    // deixa todas as letras maiúsculas
    $unidavi = strtoupper($unidavi);
    echo $unidavi;

    echo "<br>";

    // deixa todas as letras minúsculas
    $unidavi = strtolower($unidavi);
    echo $unidavi;

    echo "<br>";

    // deixa as primeiras letras maiúsculas
    $unidavi = ucwords($unidavi);
    echo $unidavi;

    echo "<br>";

    // apenas a primeira letra maiúscula
    $lab = ucfirst($lab);
    echo $lab;

    echo "<br>";

    /* ---------------------------------------------------------------------------------------- */

    $empresa = "centro universitário para o desenvolvimento do alto vale";
    $empresa = ucwords($empresa);

    // primeiro valor -> o que vai ser substituído, segundo valor -> o que vai ser colocado, terceiro valor -> variável alvo
    $empresa = str_replace('o', '0', $empresa);
    $empresa = str_replace('e', '3', $empresa);
    echo $empresa;

    echo "<br>"; 

    /* ---------------------------------------------------------------------------------------- */

    $frase = "A repetição é a mãe da retenção!";
    $palavra = "mãe";
    // vai pegar na variável $frase a palavra mãe - strpos - posição
    $q = strpos($frase, $palavra);
    echo $q;

    echo "<br>";

    // vai mostrar a variável frase do começo até a variável q
    $texto = substr($frase, 0, $q);
    echo $texto;

    echo "<br>";

    // vai mostrar a partir da variável q - strlen - tamanho
    $texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
    echo $texto2;
?>