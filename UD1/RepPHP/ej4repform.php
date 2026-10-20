<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej 4 repaso php</title>
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simpledotcss@2/simple.min.css">


</head>
<body>

    <form action="ej4rep.php" method="post">

<?php

for ($i = 1; $i <= 5;$i++){

    echo "<p><label for=\"oro\">Oro: </label></p>";
    echo "<input type=\"number\" name=\"oro[]\" id=\"oro[]\">";

}

?>
    <input type="submit">

    </form>

</body>
</html>