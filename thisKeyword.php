<?php
require_once "./data/Person.php";

$rendi = new Person("Rendi","Bandung");
$rendi->name = "Rendi";
$rendi->sayHello("Asep Riki");

// object yang kedua
$riki = new Person();
$riki->name = "Riki" . PHP_EOL;
$riki->sayHello(null);
