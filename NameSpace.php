<?php
require_once "data/namespace/Conflict.php";

// Object 1 dari data One
$riki = new \Data\One\Conflict();

// object 3 dari Data two
$rendi =new \Data\Two\Conflict();

$rendi->name="Rendi Apriandi";
$rendi->sayHello("Riki");

$riki->name="Asep Riki";
$riki->sayHello("Rendi");
