<?php
session_start();

if(!isset($_SESSION["serie"])){
    $_SESSION["serie"]=[];
}
if($_SERVER["REQUEST_METHOD"] === "POST"){
    array_push($_SESSION["serie"],$_POST["serie"]);
    var_dump($_SESSION["serie"]);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series</title>
</head>
<body>

    <form method="post">
        <label for="serie">Serie: </label>
        <input type="text" id="serie" name="serie">
        <br>

        <button type="submit">Añadir a la lista</button>

    </form>

    <br>
    <a href="pendientes.php">IR A LA LISTA</a>

<?php

?>

</body>
</html>