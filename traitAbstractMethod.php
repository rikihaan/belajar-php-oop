<?php
require_once "data/trait/Hello.php";
use Data\traits\Person;

$person=new Person();
$person->name="Eko";
$person->hello("Riki");
$person->run();
$person->goodbye("Riki");