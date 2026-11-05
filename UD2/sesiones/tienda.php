<?php
session_start();
if(!isset($_SESSION["Producto1"])){
    $_SESSION["Producto1"]=0;
    $_SESSION["Producto2"]=0;
    $_SESSION["Producto3"]=0;
}
if($_SERVER["REQUEST_METHOD"] === "POST"){
    var_dump($_POST);

        if(isset($_POST["P1"])){
            $_SESSION["Producto1"]++;
        }
        if(isset($_POST["P2"])){
            $_SESSION["Producto2"]++;
        }
        if(isset($_POST["P3"])){
            $_SESSION["Producto3"]++;
        }
    }


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tienda</title>
</head>
<body>

    <form method="post">
        <label for="P1">Producto 1</label>
        <input type="submit" id="P1" name="P1" value="Comprar1">
        <br>

        <label for="P2">Producto 2</label>
        <input type="submit" id="P2" name="P2" value="Comprar2">
        <br>

        <label for="P3">Producto 3</label>
        <input type="submit" id="P3" name="P3" value="Comprar3">
        <br>

        <button type="submit">Enviar</button>

    </form>

    <?php



       echo"<p>".$_SESSION["Producto1"]."</p>";
       echo"<p>".$_SESSION["Producto2"]."</p>";
       echo"<p>".$_SESSION["Producto3"]."</p>";

    ?>

</body>
</html>