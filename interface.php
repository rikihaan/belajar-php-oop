<?php
require_once "data/interface/Car.php";

use Data\Avanza;

$avanza = new Avanza();
$avanza->drive();
echo $avanza->getTire();
