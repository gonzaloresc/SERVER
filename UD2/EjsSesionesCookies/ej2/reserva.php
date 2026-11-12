<?php
session_start();

if(!isset($_SESSION["serie"])){
    $_SESSION["serie"]=[];
}
if($_SERVER["REQUEST_METHOD"] === "POST"){

    $_SESSION["nombre"] = $_POST["nombre"];
    var_dump($_SESSION["nombre"]);

    $_SESSION["peli"] = $_POST["peli"];
    var_dump($_SESSION["peli"]);

    $_SESSION["cantidad"] = $_POST["cantidad"];
    var_dump($_SESSION["cantidad"]);

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
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre">
        <br><br>
        
        <label for="peli">Elige una pelicula: </label>
        <input type="radio" id="yo" name="peli" value="yo">yo
        <input type="radio" id="tu" name="peli" value="tu">tu
        <input type="radio" id="aquel" name="peli" value="aquel">aquel
        <br><br>

        <label for="cantidad">Cantidad de personas: </label>
        <input type="radio" id="1" name="cantidad" value="1">1
        <input type="radio" id="2" name="cantidad" value="2">2
        <input type="radio" id="3" name="cantidad" value="3">3
        <input type="radio" id="4" name="cantidad" value="4">4
        <input type="radio" id="5" name="cantidad" value="5">5
        <br><br>

        <button type="submit">Añadir a la lista</button>

    </form>

    <br>
    <a href="resumen.php">IR AL RESUMEN</a>

<?php

?>

</body>
</html>
