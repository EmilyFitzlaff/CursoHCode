<form action="">
    <label for="num">Digite um número: </label>
    <input type="text" name="num" id="num">
    <input type="submit" value="Enviar">
</form>

<?php
// Faça um programa que peça um número e então mostre a mensagem: O número informado foi [número].
if(isset($_GET['num'])) {
    $num = $_GET['num'];
    echo "O número informado foi: ". $num;
}
?>