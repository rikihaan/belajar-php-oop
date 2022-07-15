<?php
require_once "./data/Person.php";

$eko = new Person("Karin", "Jogja");
$rendi = new Person("Danang", "Jakarta");

$eko->info();
$rendi->info();
