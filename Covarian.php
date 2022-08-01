<?php

use Data\CatShelter;
use Data\DogShalter;

require_once "data/abstract/abstractClass.php";
require_once "data/convarian/Convarian.php";

$catShelter = new  Data\CatShelter();
$catShelter->addopt("Luna");
$dogShalter = new Data\DogShalter();
$dogShalter->addopt("Doggy");