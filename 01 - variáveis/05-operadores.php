<?php

    $nome = "Hcode";
    $sobrenome = "Treinamentos";
    $nomeCompleto = $nome." ".$sobrenome;
    echo $nomeCompleto;

    echo "<br>";

    $nome .= "Treinamentos.com.br";
    echo $nome;

    echo "<br>";

    $valorTotal = 0;    
    $valorTotal += 50;
    $valorTotal -= 25;
    echo $valorTotal;
    
    echo "<br>";

    $valorTotal *= 0.9;
    echo $valorTotal;

    echo "<br>";

    // spaceship
    $a = 60;
    $b = 50;
    $c = 60;
    var_dump($a <=> $b);
    echo "<br>";
    var_dump($b <=> $c);
    echo "<br>";
    var_dump($a <=> $c);
    echo "<br>";

    // null coalesce
    $a = null; $b = null; $c = 8;
    echo $a ?? $b ?? $c;
?>