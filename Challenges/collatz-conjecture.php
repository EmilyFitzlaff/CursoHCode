<!DOCYTPE html>
<html lang="pt-br">
<?php $n = 0; ?>
    <head>
        <title>Collatz conjecture</title>
        <meta charset="utf-8">
    </head>

    <body>
        <form action="" method="POST">
            <label for="n">Informe um número: </label>
            <input type="number" id="n" name="n" placeholder="Digite aqui">

            <input type="submit" value="Enviar">
        </form>

        <?php   
            if(isset($_POST['n']))
                $n = $_POST['n'];  
            
            if ($n != 0) { 
                while ($n != 1) {
                    if ($n % 2 == 0) {
                        $n = $n/2;
                        echo "<strong>".$n."</strong> = ".$n." / 2 <br>";
                    }
                    else {
                        $n = ($n*3) + 1;
                        echo "<strong>".$n."</strong> = ".$n." * 3 + 1 <br>";
                    }
                }
            }   
        ?>
    </body>
</html>