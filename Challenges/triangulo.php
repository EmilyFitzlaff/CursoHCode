<!DOCTYPE html>
<html lang="pt-br">
<?php 
$a = 0;
if(isset($_POST['a']))
    $a = $_POST['a'];

$b = 0;
if(isset($_POST['b']))
    $b = $_POST['b'];

$c = 0;
if(isset($_POST['c']))
    $c = $_POST['c'];
?>
    <head>
        <title>Challenge - triângulo</title>
        <meta charset="utf-8">

        <!-- BOOTSTRAP --> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container">
            <br>
            <h2>Triângulo</h2>
            <hr>
            <form action="" method="post" class="form-horizontal">
                <label for="a" class="control-label col-sm-2">Informe o lado A:</label>
                <div class="col-sm-10">                
                    <input type="number" name="a" id="a" class="form-control">
                </div>

                <label for="b" class="control-label col-sm-2">Informe o lado B:</label>
                <div class="col-sm-10">  
                    <input type="number" name="b" id="b" class="form-control">
                </div>

                <label for="c" class="control-label col-sm-2">Informe o lado C:</label>
                <div class="col-sm-10">  
                    <input type="number" name="c" id="c" class="form-control">
                </div>
                <br>
                <div class="col-sm-10">  
                    <button type="submit" class="btn btn-success">Verificar</button>
                </div>
                <hr>
                <?php
                    if ($a != 0 && $b != 0 && $c != 0) {
                        // condição de existência do triângulo 
                        if (abs($b - $c) < $a && $a < $b + $c && 
                            abs($a - $c) < $b && $b < $a + $c && 
                            abs($a - $b) < $c && $c < $a + $b) {
                            echo "<h3>Verdadeiro</h3>";    
                        }
                        else echo "<h3>Falso</h3>";
                    }
                ?>
            </form>
        </div>  
    </body>
</html>