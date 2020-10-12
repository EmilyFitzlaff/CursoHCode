<!DOCYTPE html>
<html lang="pt-br">
<?php $n = 0; ?>
    <head>
        <title>Gapful Number</title>
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
                if ($n < 100 || $n > 999) {
                    echo "<p style='color:blue'>Número inválido.</p>";
                }
                else {
                    $c = (int)($n / 10);
                    while($c % 10 <> 0) {
                        $c = $c - 1;
                    }
                    
                    $u = (int)(($n % 100) % 10);

                    // gapful number
                    $gf = $c + $u;
                    echo $gf."<br>";

                    // divisão do número
                    if ($n % $gf == 0) {
                        echo "<p style='color:green'>It's Gapful Number.</p>";
                    }
                    else {
                        echo "<p style='color:red'>False. It isn't Gapful Number.</p>";
                    }
                }
            }   
        ?>
    </body>
</html>