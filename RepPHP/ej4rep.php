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

<?php

    $oro= $_POST['oro'];
    $total = array_sum($oro);
    $media= $total / count($oro);

    echo "<table>";

    echo "<tr><th>Oleada</th><th>Oro</th></tr>";

    foreach($oro as $oleada => $o){
        if($o > $media){
            echo "<tr><th>" . ($oleada+1) . "</th><th>" . $o . "</th></tr>";    
        } else {
            echo "<tr><td>" . ($oleada+1) . "</td><td>" . $o . "</td></tr>";
        }
    }

    echo "</table>";

    
    $maximoOro= max($oro);
    $mejorRonda= array_search($maximoOro, $oro) + 1;


    echo "<p>Total: {$total} - Media: {$media} - Mejor Oleada: {$mejorRonda}, con {$maximoOro} de oro</p>";

?>

</body>
</html>