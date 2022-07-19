<?php
require_once "data/import/useKeyword.php";

// tanpa useKeyword
// $class1= new Helper\Data1\Dummy();
// $class2= new Helper\Data1\Product();
// $class = new Helper\Data1\Sample();
// var_dump($class);
// var_dump($class1);
// var_dump($class2);


// dengan use keyword
use Helper\Data1\Dummy;
$dumy1 = new Dummy();
$dumy2 = new Dummy();
var_dump($dumy1);
var_dump($dumy2);


