<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones 1</title>

    <form action="funciones1.php" method="get">
        <p><label for="num">Escribe un número: </label></p>
        <input type="number" name="num" id="num">

        <br><br>
        <input type="submit">
    </form>

<?php
    
    $num= $_GET['num'];

    function esPar($variable)  {
        return $variable % 2;
    }

    echo "<p>".esPar(num)."</p>";


?>

</body>
</html>