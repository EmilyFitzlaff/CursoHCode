<?php
    // vai converter para inteiro 
    $nome = (int)$_GET["a"];
    var_dump($nome);

    echo "<br>";
    // pegar o IP do usuário
    $ip = $_SERVER["REMOTE_ADDR"];
    var_dump($ip);

    echo "<br>";

    // vai pegar o nome da página
    $script = $_SERVER["SCRIPT_NAME"];
    var_dump($script);
?>