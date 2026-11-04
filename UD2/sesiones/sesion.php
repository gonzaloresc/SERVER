<?php

session_start();
if(!isset($_SESSION["dadoAcumulado"])){
    $_SESSION["dadoAcumulado"]= [];
}

array_push($_SESSION["dadoAcumulado"],rand(1,6));

foreach (array_reverse($_SESSION["dadoAcumulado"]) as $d){
    echo "<p>$d</p>";
}