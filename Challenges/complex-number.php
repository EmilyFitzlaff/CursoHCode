<!DOCTYPE html>
<html>
<?php $a = 0; $b = 0; $c = 0; $d = 0; ?>
    <head>
        <title>Complex number multiplication</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="" method="POST">
            <label for="a">Informe A: </label>
            <input type="number" id="a" name="a" placeholder="Digite aqui">

            <label for="b">Informe B: </label>
            <input type="number" id="b" name="b" placeholder="Digite aqui">

            <label for="c">Informe C: </label>
            <input type="number" id="c" name="c" placeholder="Digite aqui">

            <label for="d">Informe D: </label>
            <input type="number" id="d" name="d" placeholder="Digite aqui">

            <input type="submit" value="Enviar">
        </form>

        <?php
            if(isset($_POST['a']))
                $a = $_POST['a'];
            if(isset($_POST['b']))
                $b = $_POST['b'];
            if(isset($_POST['c']))
                $c = $_POST['c'];
            if(isset($_POST['d']))
                $d = $_POST['d'];

            if($a != 0 && $b != 0 && $c != 0 && $d != 0) { 
                // complex number
                $v1 = $a*$c;
                $v2 = $a*$d + $b*$c; // parte imaginária
                $v3 = $b*$d*(-1);
                $cn = $v1 + $v3;
                if ($v2 > 0) {
                    echo "Complex number: ".$cn." + ".$v2."i";
                } else echo "Complex number: ".$cn." - ".$v2."i";                
            }
        ?>
    </body>
</html>