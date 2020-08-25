<!DOCTYPE html>
<html>
    <head>
        <title>Login - APP Help Desk</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body> 
        <?php include_once('menu.php'); ?>
        <div>
            <span id="span-form">Login</span>
        </div>
        <form method="POST">
            <fieldset>           
                <input type="text" id="usuario" name="usuario" class="input-text" placeholder="Usuário" required>

                <input type="password" id="senha" name="senha" class="input-text" placeholder="Senha" required>

                <button value="entrar" class="entrar">Entrar</button>
            </fieldset>
        </form>
    </body>
</html>