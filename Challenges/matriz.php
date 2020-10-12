<!DOCYTPE html>
<html lang="pt-br">
<?php $n = 0; ?>
    <head>
        <title>Rotate the matrix</title>
        <meta charset="utf-8">
    </head>

    <body>
        <form action="" method="POST">
            <label for="n">Informe a ordem da matriz: </label>
            <input type="number" id="n" name="n" placeholder="Digite aqui">

            <input type="submit" value="Enviar">
        </form>

        <?php   
            if(isset($_POST['n']))
                $n = $_POST['n'];            
            
            if ($n != 0) { 
                echo "Matriz de ordem: ".$n." x ".$n."<br><br>";
            
                echo "<strong>Matriz original: </strong><br>";

                for ($linha = 1; $linha <= $n; $linha++) {
                    for ($coluna = 1; $coluna <= $n; $coluna++) {
                        $mat[$linha][$coluna] = rand(1,100);
                        echo $mat[$linha][$coluna]." ";
                    }
                    echo "<br>";
                }

                echo "<br>";

                // rotate by 90 degrees 
                echo "<strong>Matriz com rotação de 90 graus: </strong><br>";
                for ($coluna = 1; $coluna <= $n; $coluna ++) {
                    for ($linha = $n; $linha >= 1; $linha --) {
                        echo $mat[$linha][$coluna]." ";
                    }
                    echo "<br>";
                }
            }            
        ?>
    </body>
</html>