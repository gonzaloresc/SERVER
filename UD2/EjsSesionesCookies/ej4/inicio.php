<?php

    $mensaje = "Bienvenido a la página!";

    if(!isset($_COOKIE["pagina"])){
        setcookie("pagina","Bienvenido a la página!",(time()+ (60*60*24*7)));
        $mensaje = "Bienvenido a la página!";
    } else {
        if ($_COOKIE["pagina"] != "Bienvenido a la página!" ){
            $mensaje = "<p>Ultima pagina vista: </p> <a href=".$_COOKIE['pagina'].".php>".$_COOKIE['pagina']."</a>";
        } else {
            $mensaje = "Bienvenido a la página!";
        }
    }
    

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 4</title>
</head>
<body>

    <?php echo "$mensaje" ?>

    <br>

    <a href="anime.php">Anime</a>      
    <a href="comics.php">Comics</a>
    <a href="videojuegos.php">Videojuegos</a>

</body>
</html>