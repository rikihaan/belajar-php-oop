<?php

/***
 * memanipulasi property
 */
// memangil calss perseon
require_once "./data/Person.php";

//  mebuat instan obejec dari class person
$person1 = new Person();

// menambahkan nilai ke property
$person1->name = "Asep Riki" . PHP_EOL;
$person1->address = "Kp Siliwangi" . PHP_EOL;
$person1->country = "Indonesia" . PHP_EOL;

// memampilkan atau memanggil property
echo "Name : {$person1->name}";
echo "Address : {$person1->address}";
echo "Name : {$person1->country}";

$person2 = new Person();
$person2->name = "Rendi Apriandi";
$person2->address = "Bandung";
$person2->country = "Indonesia";
var_dump($person2);
