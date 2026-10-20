<?php
require_once("Cartera.php");

$cartera = new Cartera(500);

$cartera->setRyo(600);

echo $cartera->getRyo() . PHP_EOL;

$cartera->pagar(400);

echo $cartera->getRyo();

?>