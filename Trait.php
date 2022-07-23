<?php
require_once "data/trait/Hello.php";

use Data\traits\{Person};

$person = new Person();
$person->goodbye("Riki");
$person->hello("Diki");
$person->name = "Joko";
var_dump($person);
