<?php
require_once "data/abstract/abstractClass.php";

use Data\{Location, City, Provinces};
// saat kita memcoba membuat instance object dari class abstrac maka akan terjadi error
//$location = new Location(); //error Cannot instantiate abstract class

// kita hanya bisa membuat instance onject dari class turunan abstract class nya, City,Propinces
$City = new City();
$City->name = "Bogor";
var_dump($City);

$Provinces = new Provinces();
$Provinces->name = "Jawa Barat";
var_dump($Provinces);
