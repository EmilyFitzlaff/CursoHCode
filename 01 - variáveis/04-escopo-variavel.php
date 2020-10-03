<?php
    $nome = "Emily";

    function teste() {
        global $nome;
        echo $nome;
    }
    teste();

    function teste2() {
        $nome = "João"; 
        echo $nome."Agora no teste 2";
    }
    teste2();
?>