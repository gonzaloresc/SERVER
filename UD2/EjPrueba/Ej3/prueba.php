<?php

require_once "Ninja.php";

$naruto = new Ninja("Naruto",500);

$ninja1=$naruto;

$ninja2 = clone $naruto;

$ninja1->setNombre("sisisis");

echo $ninja1->getNombre();

