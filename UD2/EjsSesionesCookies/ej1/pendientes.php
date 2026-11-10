<?php
session_start();

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(!isset($_SESSION["serie"])){
        $_SESSION["serie"]=[];
    }
}
if(isset($_POST["borrar"])){
    unset($_SESSION["serie"][$_POST["borrar"]]);
}

if(isset($_POST["vaciar"])){
    session_destroy();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendientes</title>
</head>
<body>
<?php

echo '<form method="post">';
echo '<ol>';

foreach($_SESSION["serie"] as $i=>$s){
    echo "<li>";
    echo "<p>$s </p>";
    echo "<button type='submit' id='borrar' name='borrar' value='$i'>Eliminar</button>";
    echo "</li>";
}

echo '</ol>';
echo '</form>';

echo "<br>";
echo "<button type='submit' id='vaciar' name='vaciar'>";

?>
</body>
</html>
