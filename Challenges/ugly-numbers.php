<!DOCTYPE html>
<?php 
    $n = 0;
    if(isset($_POST['num']))
        $n = $_POST['num'];
?>
    <head>
        <title>Ugly number</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="post" action="">
            <label for='num'>Informe um número: </label>
            <input type='text' id='num' name='num' placeholder="Digite aqui">
            <input type='submit' value='Enviar'>
            <?php  
                if ($n != 0) { 
                    if($n % 2 == 0 || $n % 3 == 0 || $n % 5 == 0) {
                        echo "<p style='color:green'>Ugly number.</p>";
                    }
                    else echo "<p style='color:red'>Isn't a ugly number.</p>";
                }
            ?>
        </form>
    </body>
</html>